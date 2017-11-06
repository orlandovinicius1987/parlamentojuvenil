@extends('layouts.admin')

@section('container')
    <div id="vue-admin-index">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Eleição da bandeira do PJ</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Resultado
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Bandeira</th>
                                    <th>Nome</th>
                                    <th>Votos</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($votes as $vote)
                                        <tr>
                                            <td>
                                                {{ $vote->vote }}
                                            </td>
                                            <td>
                                                {{ $vote->city }}
                                            </td>
                                            <td>
                                                {{ count($vote->subscriptions) }}
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
