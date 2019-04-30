@extends( config('app.year').'.layouts.layout')

@section('contents')


    <section class="bg-pattern subscribe-section masthead" id="form-subscribe">

        <div class="container">

                <div id="subscribe" class="form-subscribe" >
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="">Inscreva-se no Parlamento Juvenil {{ config('app.year') }}</h1>
                        </div>

                    </div>

                    @include('partials.subscribe-form')
                </div>


        </div>

    </section>




@stop

@section('page-javascripts')
    @include('scripts.vueSubscribe')
@stop
