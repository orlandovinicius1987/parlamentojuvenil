@extends( config('app.year').'.layouts.layout')

@section('contents')
    <div id="subscribe" class="form-subscribe" >
        <h1 class="text-centerx">Você já está inscrito!</h1>

        <div class="contact-text text-center">
            <p>Caso queira alterar algum dado, por favor, entre em contato com a gente:</p>
            <p><i class="fa fa-phone fa-fw"></i>@include('partials.phone') - <a href="mailto:pjalerj@gmail.com" class="already-subscribed-email">pjalerj@gmail.com</a></p>
        </div>
    </div>
@stop
