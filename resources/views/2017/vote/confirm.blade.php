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
                    <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                        <div class="foto-candidato-outer">
                            <div class="foto-candidato-inner" >
                                <img src="https://scontent.xx.fbcdn.net/v/t1.0-1/p100x100/10269379_830166683673586_5709921571223448332_n.jpg?oh=3c830a2909059a2772c83e730f07ef8c&amp;oe=59B09DA1" class="img-responsive foto-candidato-social">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 dados-candidato text-center">
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
