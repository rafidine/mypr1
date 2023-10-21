@extends('layouts.app')

@section('nom', '')

@section('contents')
    <!-- Tableau pour afficher les parrains ayant 5 votes ou plus -->
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Parrain</th>
                <th>Nombre de Parrain</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            @php
                $parrains = DB::table('electeurs')
                    ->select('parrain', DB::raw('COUNT(*) as count'))
                    ->groupBy('parrain')
                    ->get();
            @endphp

            @foreach($parrains as $parrain)
                <tr>
                    <td>{{ $parrain->parrain }}</td>
                    <td>{{ $parrain->count }}</td>
                    <td class="@if($parrain->count >= 5) text-success @else text-danger @endif">
                        @if($parrain->count >= 5)
                            Candidat Valide
                        @else
                            Non Valide
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tableau pour compter les parrains par localité -->
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Localité</th>
                <th>Parrain</th>
                <th>Nombre de Parrain</th>
            </tr>
        </thead>
        <tbody>
            @php
                $localitesParrains = DB::table('electeurs')
                    ->select('localite', 'parrain', DB::raw('COUNT(*) as count'))
                    ->groupBy('localite', 'parrain')
                    ->get();
            @endphp

            @foreach($localitesParrains as $localiteParrain)
                <tr>
                    <td>{{ $localiteParrain->localite }}</td>
                    <td>{{ $localiteParrain->parrain }}</td>
                    <td>{{ $localiteParrain->count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
