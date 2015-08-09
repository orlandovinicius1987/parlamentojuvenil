@extends('layouts.admin')

@section('container')
    <div id="vue-admin-index">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Inscrições para {{ $city }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Facebook</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($subscriptions as $person)
                            <tr>
                                <td>
                                    {{ $person->name }}
                                </td>

                                <td>
                                    {{ calculate_age($person->birthdate) }}
                                </td>

                                <td>
                                    {{ $person->facebook }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
