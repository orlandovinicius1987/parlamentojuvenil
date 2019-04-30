@extends( config('app.year').'.layouts.layout')

@section('contents')


    <section class="bg-pattern subscribe-section masthead" id="form-subscribe">

        <div class="container">

                <div id="subscribe" class="form-subscribe" >
                    <div class="row">
                    <h1 class="text-center">Inscreva-se no Parlamento Juvenil {{ config('app.year') }}</h1>
                    </div>

                    @include('partials.subscribe-form')
                </div>


        </div>

    </section>




@stop

@section('page-javascripts')
    @include('scripts.vueSubscribe')
@stop
