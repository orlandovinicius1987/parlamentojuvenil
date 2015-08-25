@extends('layouts.layout')

@section('contents')
    @foreach($links as $name => $link)
        <img data-original="{{ $link }}" alt="{{ $name }}" class="lazy" />
    @endforeach
@stop

