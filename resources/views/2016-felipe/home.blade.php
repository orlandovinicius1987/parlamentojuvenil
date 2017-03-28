@extends('2016-felipe.layouts.layout')

@section('contents')
    @include('2016-felipe.partials.header')

    @include('2016-felipe.partials.heading')

    @include('2016-felipe.partials.subscribe')

    @include('2016-felipe.partials.about')

    @include('2016-felipe.partials.video')

    @include('2016-felipe.partials.map')

    @include('2016-felipe.partials.timeline')

    @if (App::environment('local'))
        @include('2016-felipe.partials.news', ['articles' => $newArticles, 'first' => 1, 'last' => 6])
    @endif

{{--
    @if (App::environment('local'))
        @include('2016-felipe.partials.congressmen')
    @endif
--}}

    @if (App::environment('local'))
        @include('2016-felipe.partials.gallery')
    @endif

    @include('2016-felipe.partials.downloads')

    @include('2016-felipe.partials.testimonials')

    @include('2016-felipe.partials.contact')
@stop
