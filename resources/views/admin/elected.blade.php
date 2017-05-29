@extends('layouts.admin')

@section('container')
    <div id="vue-admin-index">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Eleições {{ get_current_year() }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Resumo
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Ano</th>
                                        <th>Cidades 1o turno</th>
                                        <th>Cidades 2o turno</th>
                                        <th>Votos válidos 1o turno</th>
                                        <th>Votos válidos 2o turno</th>
                                        <th>Total de Eleitores</th>
                                        <th>% Votante 1o turno</th>
                                        <th>% Votante 2o turno</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            {{ get_current_year() }}
                                        </td>

                                        <td>
                                            {{ $total_cities_1nd }}
                                        </td>

                                        <td>
                                            {{ $total_cities_2nd }}
                                        </td>

                                        <td>
                                            {{ $total_valid_votes_1nd }}
                                        </td>

                                        <td>
                                            {{ $total_valid_votes_2nd }}
                                        </td>

                                        <td>
                                            {{ $total_voters }}
                                        </td>

                                        <td>
                                            {{ $voter_percentage_1nd }}
                                        </td>

                                        <td>
                                            {{ $voter_percentage_2nd }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Eleitos
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Cidade</th>
                                        <th>Nascimento</th>
                                        <th>Matrícula</th>
                                        <th>Eleito 1o turno</th>
                                        <th>Votos 1o turno</th>
                                        <th>Eleito 2o turno</th>
                                        <th>Votos 2o turno</th>
                                        <th>Capacitação</th>
                                        <th>Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($elected as $person)
                                        <tr>
                                            <td>
                                                {{ $person->name }}
                                            </td>

                                            <td class="{{ $person->elected_2nd ? 'bg-primary' : 'bg-default' }}">
                                                {{ $person->city }}
                                            </td>

                                            <div></div>
                                            <td>
                                                {{ $person->birthdate }}
                                            </td>

                                            <td>
                                                {{ $person->registration }}
                                            </td>

                                            <td>
                                                {{ $person->elected_1nd ? 'SIM' : 'NÃO' }}
                                            </td>

                                            <td>
                                                {{ $person->votes_1nd }}
                                            </td>

                                            <td class="{{ $person->elected_2nd ? 'bg-primary' : 'bg-default' }}">
                                                {{ $person->elected_2nd ? 'SIM' : 'NÃO' }}
                                            </td>

                                            <td>
                                                {{ $person->votes_2nd }}
                                            </td>

                                            <td>
                                                @if ($person->quizResult->count())
                                                    <a href="{{ route('admin.training', [$person->id]) }}">SIM</a>
                                                @else
                                                    NÃO
                                                @endif
                                            </td>

                                            <td>
                                                <a href="/subscriptions/edit/{{ $person->subscription_id }}" class="btn btn-warning btn-xs">Editar</a>
                                                <a href="/admin/votes/{{ $person->subscription_id }}" class="btn btn-primary btn-xs">Votos</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>
    </div>
@stop
