@extends( config('app.year').'.layouts.layout')

@section('contents')
    <div class="votacao">
        <div class="text-center">
            <h1>{!! $message !!}</h1>
        </div>
    </div>
@stop
