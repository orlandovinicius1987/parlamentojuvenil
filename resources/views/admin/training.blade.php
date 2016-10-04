@extends('layouts.admin')

@section('container')
    <div id="vue-admin-index">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ $subscription->name }}</h1>
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
                                    <th>Documento / Vídeo / Quiz</th>
                                    <th>Resposta</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($subscription->watched as $watched)
                                        @if($watched->title)
                                            <tr>
                                                <td>
                                                    {{ $watched->title }}
                                                </td>

                                                <td>
                                                    {{ $watched->answer }}
                                                </td>
                                            </tr>
                                        @endif
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
