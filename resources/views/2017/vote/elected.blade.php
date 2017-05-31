@extends('2017.layouts.layout')

@section('contents')
    <div class="votacao">
        <div>
            <h1>
                {{ $year }} - Eleitos no {{ $round }}&deg; turno
            </h1>

            <br><br>

            <table class="table table-hover table-responsive">
                <thead>
                    <th>Regional</th>
                    <th>Municípío</th>
                    <th>Unidade escolar</th>
                    <th>Nome</th>
                </thead>

                <tbody>
                    @foreach ($elected as $candidate)
                        <tr>
                            <td>{{ $candidate->student->regional }}</td>
                            <td>{{ $candidate->student->city }}</td>
                            <td>{{ $candidate->student->school }}</td>
                            <td>{{ $candidate->student->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
