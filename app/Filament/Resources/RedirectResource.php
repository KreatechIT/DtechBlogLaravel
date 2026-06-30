<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RedirectResource\Pages;
use App\Models\Redirect;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RedirectResource extends Resource
{
    protected static ?string $model = Redirect::class;
    public static function getNavigationIcon(): string { return 'heroicon-o-arrow-right-circle'; }
    public static function getNavigationGroup(): ?string { return 'Settings'; }
    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('from')
                ->label('From URL')
                ->required()
                ->placeholder('/old-url')
                ->unique(Redirect::class, 'from', ignoreRecord: true),

            TextInput::make('to')
                ->label('To URL')
                ->required()
                ->placeholder('/new-url'),

            Select::make('status_code')
                ->options([301 => '301 — Permanent', 302 => '302 — Temporary'])
                ->default(301)
                ->required(),

            Toggle::make('is_active')->label('Active')->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('from')->searchable()->sortable(),
                TextColumn::make('to')->searchable(),
                TextColumn::make('status_code')->label('Type')
                    ->formatStateUsing(fn ($state) => $state === 301 ? '301 Permanent' : '302 Temporary'),
                IconColumn::make('is_active')->label('Active')->boolean(),
                TextColumn::make('created_at')->dateTime('M j, Y')->sortable(),
            ])
            ->actions([EditAction::make()])
            ->bulkActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListRedirects::route('/'),
            'create' => Pages\CreateRedirect::route('/create'),
            'edit'   => Pages\EditRedirect::route('/{record}/edit'),
        ];
    }
}
