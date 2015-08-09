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
                        Ferramentas
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <a href="/subscriptions/download" class="btn btn-primary">Baixe a planilha completa</a>
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
                            </tr>
                        </thead>
                        <tbody>
                            <template v-repeat="subscriptions">
                                <tr>
                                    <td class="text-right @{{ subscriptioncount ? 'success' : 'danger' }}">
                                        @{{ subscriptioncount || '' }}
                                    </td>

                                    <td class="@{{ subscriptioncount ? 'success' : 'danger' }}">
                                        <a href="/admin/@{{ city }}">@{{ city }}</a>
                                    </td>
                                </tr>
                            </template>
                            <tr>
                                <td>
                                    <strong>TOTAL</strong>
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

