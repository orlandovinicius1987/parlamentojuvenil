@extends('2017.layouts.layout')

@section('contents')
    <div class="votacao">
        <div>
            <h1>
                {{ $year }} - Eleitos no {{ $round }}&deg; turno
            </h1>

            <br><br>

            <style>
                .table > tbody > tr > td {
                    vertical-align: middle;
                }
            </style>

            <table class="table table-responsive table-bordered">
                <thead>
                    <th>Regional</th>
                    <th>Municípío</th>
                    <th>Unidade escolar</th>
                    <th>Nome</th>
                </thead>

                <tbody>
                    @foreach ($elected as $key => $candidate)
                        <tr>
                            @if ($candidate['regionalCount'] > 0)
                                @if ($candidate['regionalCount'] > 1)
                                    <td rowspan="{{ $candidate['regionalCount'] }}">
                                @else
                                    <td>
                                @endif
                                        {{ $candidate['regional'] }}
                                    </td>
                            @endif

                            @if ($candidate['cityCount'] > 0)
                                <td rowspan="{{ $candidate['cityCount'] }}">
                                    {{ $candidate['city'] }}
                                </td>
                            @endif

                            <td>{{ $candidate['school'] }}</td>

                            <td>{{ $candidate['name'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
