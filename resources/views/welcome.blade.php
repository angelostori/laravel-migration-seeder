@extends('layouts.master')
@section('title', 'Home')
@section('content')

<div class="container mt-5">
    <h1>Treni</h1>

    <div class="card p-3 bg-secondary">
        <div class="card bg-dark text-warning">
            <table>
                <thead>
                    <tr>
                        <th>Compagnia</th>
                        <th>Treno</th>
                        <th>Partenza</th>
                        <th>Ora P.</th>
                        <th>Arrivo</th>
                        <th>Ora A.</th>
                        <th>Ritardo</th>
                        <th>Binario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trains as $train)
                    <tr>
                        <td>{{ $train['company'] }}</td>
                        <td>{{ $train['code_comp'] }} {{ $train['code_train'] }}</td>
                        <td>{{ $train['landing_station'] }}</td>
                        <td>{{ $train['landing_time'] }}</td>
                        <td>{{ $train['arrival_station'] }}</td>
                        <td>{{ $train['arrival_time'] }}</td>
                        <td>
                            @if($train['delay'] > 0)
                            {{ $train['delay'] }}'
                            @else
                            -
                            @endif
                        </td>
                        <td class="fw-bold">{{ $train['platform'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection