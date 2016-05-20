@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header')

    @include('2016.partials.heading')

    @include('2016.partials.about')

    @include('2016.partials.timeline')

    @include('2016.partials.news', ['articles' => $newArticles])

    @include('2016.partials.congressmen')

    @include('2016.partials.gallery')

    @include('2016.partials.downloads')

    @include('2016.partials.testimonials')

    @include('2016.partials.contact')
@stop
