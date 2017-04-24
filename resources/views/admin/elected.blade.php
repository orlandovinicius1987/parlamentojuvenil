@extends('layouts.admin')

@section('container')
    <div id="vue-admin-index">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Deputados juvenis eleitos</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Listagem
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

                                            <td>
                                                {{ $person->city }}
                                            </td>

                                            <td>
                                                {{ $person->birthdate }}
                                            </td>

                                            <td>
                                                {{ $person->registration }}
                                            </td>

                                            <td>
                                                @if ($person->quizResult->count())
                                                    <a href="{{ route('admin.training', [$person->id]) }}">SIM</a>
                                                @else
                                                    NÃO
                                                @endif
                                            </td>

                                            <td>
                                                <a href="/subscriptions/edit/{{ $person->id }}" class="btn btn-warning btn-xs">Editar</a>
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
