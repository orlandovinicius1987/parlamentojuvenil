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
                            <tr v-repeat="
                                entry: data
                                | filterBy filterKey
                                | orderBy sortKey reversed[sortKey]">
                                <td>
                                    @{{entry['city']}}
                                </td>

                                <td>
                                    @{{entry['subscriptionCount']}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
@stop

