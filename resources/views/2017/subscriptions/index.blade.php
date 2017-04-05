@extends('2017.layouts.layout')

@section('contents')
    <div id="subscribe">
        @include('partials.subscribe-form-fields')
    </div>
@stop

@section('page-javascripts')
    @include('scripts.vueSubscribe')
@stop
