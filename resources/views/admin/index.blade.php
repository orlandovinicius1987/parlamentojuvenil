@extends('layouts.admin')

@section('container')
    <div id="vue-admin-index">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Inscrições (@{{ total }})</h1>
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
                        <div class="col-lg-12">
                            @include('admin.partials.summary')

                            <a href="/subscriptions/download" class="btn btn-primary">Baixe a planilha completa</a>

                            <div v-show="!filterSchools" v-on="click: __clickFilterSchools" class="btn btn-danger">Mostrar municípios com mais de uma escola</div>
                            <div v-show="filterSchools"  v-on="click: __clickFilterSchools" class="btn btn-success">Mostrar todas</div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-right">Inscrições</th>
                                <th>Município</th>
                                <th>Escolas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-repeat="subscription : subscriptions | moreThanOneSchool ">
                                <tr>
                                    <td class="text-right @{{ subscription.subscriptioncount ? 'success' : 'danger' }}">
                                        @{{ subscription.subscriptioncount || '' }}
                                    </td>

                                    <td class="@{{ subscription.subscriptioncount ? 'success' : 'danger' }}">
                                        <a href="/admin/@{{ subscription.city }}">@{{ subscription.city }}</a>
                                    </td>

                                    <td class="@{{ subscription.subscriptioncount ? 'success' : 'danger' }}">
                                        @{{ subscription.schoolcount }}
                                    </td>
                                </tr>
                            </template>
                            <tr>
                                <td>
                                    <strong>TOTAL</strong>
                                </td>

                                <td>

                                </td>

                                <td class="text-right">
                                    @{{ total }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

