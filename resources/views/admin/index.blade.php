@extends('layouts.admin')

@section('container')
    <div id="vue-admin-index">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Inscrições (@{{ total }})</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Município</th>
                            <th>Inscrições</th>
                        </tr>
                        </thead>
                        <tbody>
                            <template v-repeat="subscriptions">
                                <tr>
                                    <td>
                                        @{{ city }}
                                    </td>

                                    <td class="text-right">
                                        @{{ subscriptioncount || '' }}
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
@stop

