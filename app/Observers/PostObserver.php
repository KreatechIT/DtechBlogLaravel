<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostObserver
{
    public function saved(Post $post): void
    {
        if (! $post->wasChanged('featured_image_path') || ! $post->featured_image_path) {
            return;
        }

        $disk = Storage::disk('public');
        $path = $post->featured_image_path;

        if (! $disk->exists($path)) {
            return;
        }

        $fullPath = $disk->path($path);

        Image::make($fullPath)
            ->resize(1920, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->save($fullPath, 85);
    }
}
