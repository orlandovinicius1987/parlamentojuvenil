@extends( get_current_year().'.layouts.layout')

@section('contents')
    <section class="subscribe-section mastheadx" id="form-subscribe">
        <div class="container">
            @foreach($news as $new)
                <div class="row">
                    <h1>{{$new->title}}</h1>
                    <h2>{{$new->subtitle}}</h2>
                    <div>{{$new->lead}}</div>
                </div>
            @endForEach
        </div>
    </section>
@stop
