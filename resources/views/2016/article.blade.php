@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header')

    <section id="home">
        <div id="main-slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="/pj2016/images/edicoes/vix/banner_vix.jpg" alt="slider">
                </div>
            </div>
        </div>
    </section>

    <section id="article">
        <div class="col-xs-12 col-md-4 quadro-amarelo texto-preto" id="article_{{ $article['id'] }}">
            <div class="titulo borda-preta text-center">{{ $article['heading'] }}</div>

            <div class="thumbnail">
                <a href="#">
                    <img src="{!! make_image_url($article['image']) !!}" alt="">
                </a>
            </div>

            <div class="col-xs-12 quadro-branco borda-preta-lateral texto-preto">
                {{ $article['date'] }}

                @if ($article['subheading'])
                    - {{ $article['subheading'] }}
                @endif

                <div>
                    {!! $article['short_body'] !!}
                </div>
            </div>

            <div class="col-xs-12 quadro-branco borda-preta-lateral borda-preta-final">
                <div class="pull-left">

                    <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>

                    <a href="https://twitter.com/intent/tweet?url=" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>

                    <a href="https://plus.google.com/share?url=" target="_blank">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a>

                </div>
                <div class="pull-right">
                    <a href="">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop
