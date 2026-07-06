{{-- resources/views/website/service-detail.blade.php --}}
@extends('layouts.website')

@section('page-meta')
<title>{{ $serviceDetails->name }} - Dtech Corp Ltd</title>
<meta name="description" content="{{ $serviceDetails->description }}">
<x-json-ld type="Service" :data="[
    'name' => $serviceDetails->name,
    'description' => $serviceDetails->description,
    'url' => url()->current(),
    'provider' => ['@type' => 'Organization', 'name' => config('organization.name')],
    'areaServed' => 'BD',
]" />
@endsection

@section('page-content')
<div class="container">
    <h1>{{ $serviceDetails->name }}</h1>
    <img src="{{ asset($serviceDetails->image) }}" alt="{{ $serviceDetails->name }}">
    <p>{{ $serviceDetails->description }}</p>
</div>
@endsection
