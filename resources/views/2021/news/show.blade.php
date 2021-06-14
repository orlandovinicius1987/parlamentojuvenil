@extends( get_current_year().'.layouts.layout')

@section('contents')
    <section class="subscribe-section mastheadx" id="form-subscribe">
        <div class="container">
            <div class="row">
                <h1>{{$new->title}}</h1>
                <h2>{{$new->subtitle}}</h2>
                <div>{{$new->body}}</div>
            </div>
        </div>
    </section>
@stop
