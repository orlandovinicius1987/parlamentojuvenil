@extends('layouts.admin')

@section('container')
    <div id="vue-admin-index">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Incrições por escolas</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Escolas
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Escola</th>
                                    <th>Cidade</th>
                                    <th>Inscrições</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($schools as $school)
                                        <tr>
                                            <td>
                                                {{ $school->school }}
                                            </td>
                                            <td>
                                                {{ $school->city }}
                                            </td>
                                            <td>
                                                {{ count($school->subscriptions) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                {{--@foreach($subscriptions as $person)--}}
                                    {{--<tr class="{{ $person->ignored ? 'danger' : '' }}">--}}
                                        {{--<td>--}}
                                            {{--{{ $person->id }}--}}
                                        {{--</td>--}}

                                        {{--<td>--}}
                                            {{--{{ $person->name }}--}}
                                        {{--</td>--}}

                                        {{--<td>--}}
                                            {{--{{ calculate_age($person->birthdate) }}--}}
                                        {{--</td>--}}

                                        {{--<td>--}}
                                            {{--{{ $person->school }}--}}
                                        {{--</td>--}}

                                        {{--<td>--}}
                                            {{--@if ($person->facebook)--}}
                                                {{--<a href="{{ $person->facebook }}">{{ $person->facebook }}</a>--}}
                                            {{--@endif--}}
                                        {{--</td>--}}

                                        {{--<td>--}}
                                            {{--<a href="/subscriptions/ignore/{{ $person->id }}" class="btn btn-{{ $person->ignored ? 'success' : 'danger' }} btn-xs">{{ $person->ignored ? 'Reativar' : 'Ignorar' }}</a>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}
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
