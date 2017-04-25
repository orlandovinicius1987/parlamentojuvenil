@extends('2017.layouts.layout')

@section('contents')
    <div class="votacao">
        <div class="text-center">
            <h1> Confirmação de Voto
            </h1>
            <h2>Você realmente deseja votar nesse candidato(a)</h2>
        </div>

        <div class="row vote vote-confirmation">
            <div class="col-xs-12 col-sm-offset-3 col-sm-6 ">
                <div class="well">
                    <div class="col-xs-12 col-sm-4 foto-candidato">
                        <img src="/templates/2017/images/foto_candidato.jpg" class="img-responsive">
                    </div>
                    <div class="col-xs-12 col-sm-8 dados-candidato">
                        <p>Candidato(a)</p>
                        <p class="nome-candidato">Fulano de Tal</p>
                        <p class="cargo">Deputado(a) Estadual Juvenil</p>
                        <p class="escola">Escola Ipsem Lorem</p>
                    </div>
                </div>
                <a href="" class="btn btn-primary btn-large center-block">CONFIRMAR</a>
            </div>
        </div>
    </div>

@stop
