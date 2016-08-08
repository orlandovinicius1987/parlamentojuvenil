@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="titulo" class="fundo-capacitacao">
        <div class="container">
            <div class="row">
                <div class="col-xs12 text-center">
                    &nbsp;<BR>
                    <h1>Capacitação</h1>
                    &nbsp;<BR> &nbsp;<BR>
                    <div class="capacitacao-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et tellus eget diam sagittis rutrum at at eros. Vestibulum vel efficitur nibh. Vestibulum consectetur, tortor sed feugiat rhoncus, nisi tortor semper risus, ut accumsan massa neque quis diam. In egestas eros et enim tempus, ac semper enim dignissim. Cras porta elit quis iaculis bibendum. Praesent pellentesque sapien odio, id aliquam metus dictum in. Maecenas dapibus lorem feugiat risus ultrices sollicitudin. Vivamus fringilla ullamcorper libero. Donec eget eleifend ligula. Etiam a consequat urna.</div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs12">
                        @include('partials.capacitation-login-form')
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="fundo-azul1">
        <div class="container">
            <div class="row">
                <div class="col-xs12">

                </div>
            </div>
        </div>
    </section>--}}


@stop
