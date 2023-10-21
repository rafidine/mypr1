@extends('layouts.app')

@section('nom', 'Tableau de Bord')

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Parrains ayant 5 votes ou plus</div>
                <div class="card-body">
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
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Nombre de Parrains par Localité</div>
                <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Courbe d'évolution du nombre de parrains</div>
                <div class="card-body">
                    <canvas id="evolutionChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var parrainsData = @json($parrains);

    var labels = parrainsData.map(function(item) {
        return item.parrain;
    });

    var counts = parrainsData.map(function(item) {
        return item.count;
    });

    var ctx = document.getElementById('evolutionChart').getContext('2d');
    var evolutionChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Nombre de Parrains',
                data: counts,
                backgroundColor: 'orange'
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection
