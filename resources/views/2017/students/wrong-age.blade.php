@extends('2017.layouts.layout')

@section('contents')
    <section id="subscribe" class="fundo-inscricao">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="subscribe-title">Para participar do Parlamento Juvenil, os alunos precisam ter entre 14 e 17 anos.</h1>
                <h3 class="subscribe-title">Se você nasceu entre {{ Carbon\Carbon::parse(config('app.student.birthdate.start'))->format('d/m/Y') }} e {{ Carbon\Carbon::parse(config('app.student.birthdate.end'))->format('d/m/Y') }}, por favor entre em contato com a sua escola.</h3>
            </div>
        </div>
    </section>
@stop
