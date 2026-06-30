<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = Sitemap::create();

        $staticPages = [
            ['path' => '/',                     'priority' => 1.0, 'freq' => Url::CHANGE_FREQUENCY_WEEKLY],
            ['path' => '/about',                'priority' => 0.8, 'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/services',             'priority' => 0.8, 'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/projects',             'priority' => 0.8, 'freq' => Url::CHANGE_FREQUENCY_WEEKLY],
            ['path' => '/landmark-projects',    'priority' => 0.7, 'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/commercial-projects',  'priority' => 0.7, 'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/residential-projects', 'priority' => 0.7, 'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/products',             'priority' => 0.7, 'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/contact',              'priority' => 0.6, 'freq' => Url::CHANGE_FREQUENCY_YEARLY],
            ['path' => '/career',               'priority' => 0.6, 'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/our-clients',          'priority' => 0.5, 'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['path' => '/our-suppliers',        'priority' => 0.5, 'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
        ];

        foreach ($staticPages as $page) {
            $sitemap->add(
                Url::create(url($page['path']))
                    ->setPriority($page['priority'])
                    ->setChangeFrequency($page['freq'])
            );
        }

        Post::published()
            ->orderBy('published_at', 'desc')
            ->each(function (Post $post) use ($sitemap) {
                $sitemap->add(
                    Url::create(url('/blog/' . $post->slug))
                        ->setLastModificationDate($post->updated_at)
                        ->setPriority(0.8)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                );
            });

        return $sitemap->toResponse(request());
    }
}
