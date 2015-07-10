@extends('templates.layout')

@section('contents')
    @foreach($links as $name => $link)
        <img src="{{ $link }}" alt="{{ $name }}"/>
    @endforeach
@stop

