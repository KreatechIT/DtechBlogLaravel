<?php

use App\Models\Post;
use Tests\TestCase;

uses(TestCase::class);

test('relative featured image paths use the public storage URL', function () {
    config(['filesystems.disks.public.url' => 'http://localhost/storage']);

    $post = new Post(['featured_image_path' => 'posts/featured/example.jpg']);

    expect($post->featured_image_url)
        ->toBe('http://localhost/storage/posts/featured/example.jpg');
});

test('existing public and absolute featured image URLs remain unchanged', function (string $path) {
    $post = new Post(['featured_image_path' => $path]);

    expect($post->featured_image_url)->toBe($path);
})->with([
    'imported storage URL' => '/storage/blog-images/imported.jpg',
    'absolute HTTPS URL' => 'https://cdn.example.com/featured.jpg',
]);
