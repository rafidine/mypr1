@extends('layouts.app')

@section('nom', 'Home Electeur')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Electeur</h1>
        <a href="{{ route('electeurs.create') }}" class="btn btn-primary" style="background-color: yellow; color: black;">Add Electeur</a>
    </div>


    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <!-- Tableau pour compter les parrains -->
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>nom</th>
                <th>localite</th>
                <th>Electeur Code</th>
                <th>parrain</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($electeur->count() > 0)
                @foreach($electeur as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nom }}</td>
                        <td class="align-middle">{{ $rs->localite }}</td>
                        <td class="align-middle">{{ $rs->electeur_code }}</td>
                        <td class="align-middle">{{ $rs->parrain }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('electeurs.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('electeurs.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('electeurs.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Electeur not found</td>
                </tr>
            @endif
        </tbody>
    </table>

    <!-- Tableau pour compter les parrains -->
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Parrain</th>
                <th>Nombre de Votes</th>
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
                <th>Nombre de Votes</th>
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
