@extends(config('app.year').'.layouts.layout')

@section('contents')


    @include( config('app.year').'.home.partials.swiper')
    @include( config('app.year').'.home.partials.about')
    @include( config('app.year').'.home.partials.howitworks')

    @include( config('app.year').'.home.partials.whocan')


    {{--@include( config('app.year').'.home.partials.downloads')--}}

{{--    @include( config('app.year').'.home.partials.instagram')--}}



{{--
    @if (app()->environment() != 'production')
        @include( config('app.year').'.home.partials.timeline')
    @endif
    --}}

@stop
