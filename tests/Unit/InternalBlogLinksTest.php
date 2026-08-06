<?php

use Tests\TestCase;

uses(TestCase::class);

function linksWithin(string $html, string $xpath): DOMNodeList
{
    $document = new DOMDocument();
    @$document->loadHTML($html);

    return (new DOMXPath($document))->query($xpath);
}

test('homepage service cards and footer link to the internal blog', function () {
    $response = $this->get('/');

    $response->assertOk()
        ->assertDontSee('service-single.html', false)
        ->assertDontSee('blog.dtechcorpltd.com', false);

    $blogUrl = route('website.blog');
    $serviceLinks = linksWithin(
        $response->getContent(),
        "//section[@id='arck-service']//h3/a[@href='{$blogUrl}']",
    );
    $footerLinks = linksWithin(
        $response->getContent(),
        "//footer[@id='arck-footer']//a[@href='{$blogUrl}' and normalize-space()='Blog']",
    );

    expect($serviceLinks)->toHaveCount(28)
        ->and($footerLinks)->toHaveCount(1);
});

test('services page cards link to the internal blog', function () {
    $response = $this->get('/services');

    $response->assertOk()
        ->assertDontSee('blog.dtechcorpltd.com', false);

    $blogUrl = route('website.blog');
    $serviceLinks = linksWithin(
        $response->getContent(),
        "//section[@id='arck-service']//h3/a[@href='{$blogUrl}']",
    );

    expect($serviceLinks)->toHaveCount(28);
});
