@extends( config('app.year').'.layouts.layout')

@section('contents')


    <section class="bg-pattern" id="form-subscribe">

        <div class="container">

                <div id="subscribe" class="form-subscribe" >
                    <div class="row">
                    <h1>Inscreva-se no Parlamento Juvenil {{ config('app.year') }}</h1>
                    </div>
                    
                    @include('partials.subscribe-form')
                </div>


        </div>

    </section>




@stop

@section('page-javascripts')
    @include('scripts.vueSubscribe')
@stop
