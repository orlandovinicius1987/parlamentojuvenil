@extends( config('app.year').'.layouts.layout')

@section('contents')
    @if(config('app.subscriptions.enabled'))
        @include( config('app.year').'.subscriptions.page')
    @endif
@stop
