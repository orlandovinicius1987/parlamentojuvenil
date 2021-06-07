@extends( get_current_year().'.layouts.layout')

@section('contents')
    <section class="subscribe-section mastheadx" id="form-subscribe">
        <div class="container">
            @foreach($news as $new)
                <div class="row">
                    <a href="{{$new->show_url}}">Link</a>
                    <h1>{{$new->title}}</h1>
                    <h2>{{$new->subtitle}}</h2>
                    <div>{{$new->lead}}</div>
                </div>

                <div>
                    Desktop
                    <img src="{{$new->image('cover', 'desktop')}}" />

                    Mobile
                    <img src="{{$new->image('cover', 'mobile')}}" />

                    Flexible
                    <img src="{{$new->image('cover', 'flexible')}}" />
                </div>
            @endForEach
        </div>
    </section>
@stop
