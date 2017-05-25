@extends('2017.layouts.layout')

@section('contents')
    <div class="votacao">
        <div class="text-center">
            <h1>
                Olá {{ loggedUser()->student->name }},<br>
                escolha e vote em seu candidato
            </h1>

            <h2 class="vote-cidade">{{ loggedUser()->student->city }}</h2>
        </div>

        <div class="row vote">
            @foreach($candidates as $candidate)
                <div class="col-sm-4">
                    <div class="well {{ random_color('vote', ['haze-green']) }}">
                        <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                            <div class="foto-candidato-outer">
                                <div class="foto-candidato-inner" >
                                    <img src="{{ $candidate->user_avatar }}" class="img-responsive foto-candidato-social">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 dados-candidato text-center">
                            <p>Candidato(a)</p>
                            <p class="nome-candidato">{{ $candidate->student_name }}</p>
                            <p class="cargo">Deputado(a) Estadual Juvenil</p>
                            <p class="escola">{{ $candidate->student_school }}</p>
                            <a href="{{ route('vote.confirm', ['subscription_id' => $candidate->subscription_id]) }}" class="btn btn-primary btn-large center-block">VOTAR</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@stop

