<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    public static function getNavigationIcon(): string { return 'heroicon-o-document-text'; }
    public static function getNavigationGroup(): ?string { return 'Blog'; }
    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema->columns(['default' => 1, 'lg' => 3])->dense()->components([

            // ── Row 1: Editorial | Publishing ────────────────────────
            Section::make('Editorial Content')
                ->compact()
                ->columnSpan(['default' => 1, 'lg' => 2])
                ->schema([
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                            if (($get('slug') ?? '') !== Str::slug($old ?? '')) {
                                return;
                            }
                            $newSlug = Str::slug($state ?? '');
                            $set('slug', $newSlug);
                            if (empty($get('canonical_url'))) {
                                $set('canonical_url', url('/blog/' . $newSlug));
                            }
                        }),

                    TextInput::make('slug')
                        ->required()
                        ->unique(Post::class, 'slug', ignoreRecord: true)
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                            $oldUrl = url('/blog/' . ($old ?? ''));
                            $current = $get('canonical_url') ?? '';
                            if (empty($current) || $current === $oldUrl) {
                                $set('canonical_url', url('/blog/' . ($state ?? '')));
                            }
                        }),

                    TextInput::make('h1_title')
                        ->label('H1 Title')
                        ->helperText('Optional override. Leave blank to use the title.')
                        ->maxLength(255),

                    Textarea::make('excerpt')
                        ->rows(3)
                        ->helperText('Short summary for listings and previews'),
                ]),

            Section::make('Publishing')
                ->compact()
                ->columnSpan(1)
                ->schema([
                    Select::make('status')
                        ->options([
                            'draft'     => 'Draft',
                            'published' => 'Published',
                            'scheduled' => 'Scheduled',
                        ])
                        ->default('draft')
                        ->required(),

                    Select::make('author_id')
                        ->label('Author')
                        ->relationship('author', 'name')
                        ->searchable()
                        ->preload(),

                    DateTimePicker::make('published_at')
                        ->label('Published At')
                        ->default(fn () => now()),
                ]),

            // ── Row 2: Body + Content Blocks | Taxonomy ──────────────
            Section::make('Content')
                ->compact()
                ->description('Write in the rich editor below, then add optional content blocks underneath.')
                ->columnSpan(['default' => 1, 'lg' => 2])
                ->schema([
                    Toggle::make('use_raw_html')
                        ->label('Switch to Raw HTML')
                        ->live()
                        ->dehydrated(false),

                    RichEditor::make('body')
                        ->toolbarButtons([
                            'bold', 'italic', 'strike', 'underline',
                            'h2', 'h3',
                            'bulletList', 'orderedList', 'blockquote',
                            'link', 'attachFiles',
                            'table',
                            'redo', 'undo',
                        ])
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsDirectory('posts/body-images')
                        ->extraAttributes(['style' => 'min-height: 180px'])
                        ->visible(fn (Get $get) => ! $get('use_raw_html')),

                    Textarea::make('body')
                        ->rows(8)
                        ->extraAttributes(['style' => 'font-family: monospace; font-size: 13px;'])
                        ->visible(fn (Get $get) => (bool) $get('use_raw_html')),

                    Section::make('Content Blocks')
                        ->compact()
                        ->collapsed()
                        ->collapsible()
                        ->schema([
                            Builder::make('content_blocks')
                                ->label('')
                                ->blocks([
                                    Block::make('key_points')
                                        ->label('Key Points Block')
                                        ->icon('heroicon-o-list-bullet')
                                        ->schema([
                                            TextInput::make('points.0')->label('Key Point 1'),
                                            TextInput::make('points.1')->label('Key Point 2'),
                                            TextInput::make('points.2')->label('Key Point 3'),
                                        ]),

                                    Block::make('pull_quote')
                                        ->label('Pull Quote Block')
                                        ->icon('heroicon-o-chat-bubble-left-right')
                                        ->schema([
                                            Textarea::make('content')->label('Quote')->required()->rows(3),
                                            TextInput::make('attribution')->label('Attribution'),
                                        ]),

                                    Block::make('related_links')
                                        ->label('Related Links Block')
                                        ->icon('heroicon-o-link')
                                        ->schema([
                                            Grid::make(2)->schema([
                                                TextInput::make('links.0.label')->label('Link 1 Label'),
                                                TextInput::make('links.0.url')->label('Link 1 URL')->url(),
                                            ]),
                                            Grid::make(2)->schema([
                                                TextInput::make('links.1.label')->label('Link 2 Label'),
                                                TextInput::make('links.1.url')->label('Link 2 URL')->url(),
                                            ]),
                                            Grid::make(2)->schema([
                                                TextInput::make('links.2.label')->label('Link 3 Label'),
                                                TextInput::make('links.2.url')->label('Link 3 URL')->url(),
                                            ]),
                                        ]),

                                    Block::make('embed')
                                        ->label('Embed Block')
                                        ->icon('heroicon-o-play-circle')
                                        ->schema([
                                            TextInput::make('url')->label('Embed URL')->url()->required(),
                                            TextInput::make('title')->label('Title'),
                                            TextInput::make('caption')->label('Caption'),
                                        ]),

                                    Block::make('gallery')
                                        ->label('Gallery Block')
                                        ->icon('heroicon-o-photo')
                                        ->schema([
                                            Grid::make(3)->schema([
                                                TextInput::make('items.0.image_url')->label('Image 1 URL'),
                                                TextInput::make('items.0.alt')->label('Alt'),
                                                TextInput::make('items.0.caption')->label('Caption'),
                                            ]),
                                            Grid::make(3)->schema([
                                                TextInput::make('items.1.image_url')->label('Image 2 URL'),
                                                TextInput::make('items.1.alt')->label('Alt'),
                                                TextInput::make('items.1.caption')->label('Caption'),
                                            ]),
                                            Grid::make(3)->schema([
                                                TextInput::make('items.2.image_url')->label('Image 3 URL'),
                                                TextInput::make('items.2.alt')->label('Alt'),
                                                TextInput::make('items.2.caption')->label('Caption'),
                                            ]),
                                            Grid::make(3)->schema([
                                                TextInput::make('items.3.image_url')->label('Image 4 URL'),
                                                TextInput::make('items.3.alt')->label('Alt'),
                                                TextInput::make('items.3.caption')->label('Caption'),
                                            ]),
                                        ]),

                                    Block::make('faq')
                                        ->label('FAQ Block')
                                        ->icon('heroicon-o-question-mark-circle')
                                        ->schema([
                                            TextInput::make('items.0.question')->label('Q1'),
                                            Textarea::make('items.0.answer')->label('A1')->rows(2),
                                            TextInput::make('items.1.question')->label('Q2'),
                                            Textarea::make('items.1.answer')->label('A2')->rows(2),
                                            TextInput::make('items.2.question')->label('Q3'),
                                            Textarea::make('items.2.answer')->label('A3')->rows(2),
                                        ]),
                                ])
                                ->collapsible()
                                ->cloneable()
                                ->reorderableWithButtons(),
                        ]),
                ]),

            Section::make('Taxonomy')
                ->compact()
                ->columnSpan(1)
                ->schema([
                    Select::make('categories')
                        ->relationship('categories', 'name')
                        ->multiple()
                        ->searchable()
                        ->preload(),

                    Select::make('tags')
                        ->relationship('tags', 'name')
                        ->multiple()
                        ->searchable()
                        ->preload(),
                ]),

            // ── Row 3: (spacer) | Media & SEO ───────────────────────
            Section::make('Media & SEO')
                ->compact()
                ->columnSpan(['default' => 1, 'lg' => 3])
                ->columns(['default' => 1, 'lg' => 2])
                ->schema([
                    Section::make('Featured Image')
                        ->compact()
                        ->schema([
                            FileUpload::make('featured_image_path')
                                ->label('Image')
                                ->image()
                                ->disk('public')
                                ->directory('posts/featured')
                                ->maxSize(5120),

                            TextInput::make('featured_image_alt')
                                ->label('Alt Text'),

                            Grid::make(2)->schema([
                                TextInput::make('featured_image_width')->label('Width'),
                                TextInput::make('featured_image_height')->label('Height'),
                            ]),

                            Textarea::make('featured_image_srcset')
                                ->label('Srcset')
                                ->helperText('e.g. /img/story-640.jpg 640w, /img/story-1280.jpg 1280w')
                                ->rows(2),
                        ]),

                    Section::make('SEO')
                        ->compact()
                        ->schema([
                            TextInput::make('meta_title')->label('Meta Title')->maxLength(70),
                            Textarea::make('meta_description')->label('Meta Description')->rows(2)->maxLength(160),
                            TextInput::make('canonical_url')->label('Canonical URL')->placeholder('https://example.com/blog/slug')->url(),
                            Select::make('meta_robots')
                                ->label('Meta Robots')
                                ->options([
                                    'index,follow'   => 'index, follow (default)',
                                    'noindex,follow' => 'noindex, follow',
                                    'index,nofollow' => 'index, nofollow',
                                    'noindex,nofollow' => 'noindex, nofollow',
                                ])
                                ->default('index,follow'),
                            TextInput::make('og_title')->label('OG Title')->maxLength(90),
                            Textarea::make('og_description')->label('OG Description')->rows(2)->maxLength(200),
                            TextInput::make('og_image_path')->label('OG Image Path')->placeholder('/images/social/share-card.jpg'),
                            Select::make('schema_output')
                                ->label('Schema Output')
                                ->options(['enabled' => 'Enabled', 'disabled' => 'Disabled'])
                                ->default('enabled'),
                            TextInput::make('primary_schema_type')->label('Schema Type'),
                        ]),
                ]),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('featured_image_path')
                    ->label('Image')
                    ->square()
                    ->getStateUsing(fn ($record) => $record->featured_image_url
                        ? url($record->featured_image_url)
                        : null),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(50),

                TextColumn::make('author.name')
                    ->label('Author')
                    ->sortable(),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'published' => 'success',
                        'draft'     => 'warning',
                        'scheduled' => 'info',
                        default     => 'gray',
                    }),

                TextColumn::make('published_at')
                    ->label('Published')
                    ->dateTime('M j, Y')
                    ->sortable(),

                TextColumn::make('categories.name')
                    ->label('Categories')
                    ->badge()
                    ->separator(','),

                TextColumn::make('created_at')
                    ->dateTime('M j, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'draft'     => 'Draft',
                        'published' => 'Published',
                        'scheduled' => 'Scheduled',
                    ]),

                SelectFilter::make('author')
                    ->relationship('author', 'name'),
            ])
            ->actions([static::previewAction(), EditAction::make()])
            ->bulkActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }

    public static function previewAction(): Action
    {
        return Action::make('preview')
            ->label('Preview')
            ->icon('heroicon-o-eye')
            ->color('gray')
            ->url(fn (Post $record) => URL::temporarySignedRoute(
                'website.blog.preview',
                now()->addHours(2),
                ['slug' => $record->slug],
            ))
            ->openUrlInNewTab();
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit'   => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
