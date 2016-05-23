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
                            <div v-show="filterSchools"  v-on="click: __clickFilterSchools" class="btn btn-success">Mostrar todos os municípios</div>
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
                                <th v-on="click: __changeOrder('subscriptioncount')" class="text-right">
                                    Inscrições
                                    <div v-show="orderby == 'subscriptioncount'" class="btn btn-danger btn-xs">
                                        <i class="fa fa-arrow-@{{ ordertype == '' ? 'down' : 'up' }}"></i>
                                    </div>
                                </th>

                                <th v-on="click: __changeOrder('city')">
                                    Município
                                    <div v-show="orderby == 'city'" class="btn btn-danger btn-xs">
                                        <i class="fa fa-arrow-@{{ ordertype == '' ? 'down' : 'up' }}">
                                        </i>
                                    </div>
                                </th>

                                <th v-on="click: __changeOrder('schoolcount')">
                                    Escolas
                                    <div v-show="orderby == 'schoolcount'" class="btn btn-danger btn-xs">
                                        <i class="fa fa-arrow-@{{ ordertype == '' ? 'down' : 'up' }}"></i>
                                    </div>
                                </th>

                                <th v-on="click: __changeOrder('lastsubscription')">
                                    Data/hora última inscrição
                                    <div v-show="orderby == 'lastsubscription'" class="btn btn-danger btn-xs">
                                        <i class="fa fa-arrow-@{{ ordertype == '' ? 'down' : 'up' }}"></i>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-repeat="subscriptions | orderBy orderby ordertype | moreThanOneSchool" track-by="city">
                                <tr>
                                    <td class="text-right @{{ subscriptioncount ? 'success' : 'danger' }}">
                                        @{{ subscriptioncount || '' }}
                                    </td>

                                    <td class="@{{ subscriptioncount ? 'success' : 'danger' }}">
                                        <a href="{{ route('admin.home') }}/@{{ city }}">@{{ city }}</a>
                                    </td>

                                    <td class="@{{ subscriptioncount ? 'success' : 'danger' }}">
                                        @{{ schoolcount }}
                                    </td>

                                    <td class="@{{ subscriptioncount ? 'success' : 'danger' }}">
                                        @{{ formatteddate }}
                                    </td>
                                </tr>
                            </template>
                            <tr>
                                <td>
                                    <strong>TOTAL</strong>
                                </td>

                                <td></td>

                                <td></td>

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

