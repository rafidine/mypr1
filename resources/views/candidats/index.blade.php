@extends('layouts.app')
    
    @section('nom', 'page Creer candidat')
    
    @section('contents')
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0">Creation d'un candidat</h1>
            <a href="{{ route('candidats.create') }}" class="btn btn-primary" style="background-color: yellow; color: black;">creer candidat</a>
        </div>
        <hr />
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        @php
            $candidatCounts = []; // Tableau pour stocker le nombre de chaque candidat
            $parrainCounts = []; // Tableau multidimensionnel pour stocker le nombre de parrains par candidat et localité
        @endphp

        <table class="table table-hover">
            <thead class="table-primary"> 
                <tr>
                    <th>#</th>
                    <th>nom</th>
                    <th>localite</th>
                    <th>electeur code</th>
                    <th>partie</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($candidat->count() > 0)
                    @foreach($candidat as $rs)
                    

                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $rs->nom }}</td>
                            <td class="align-middle">{{ $rs->localite }}</td>
                            <td class="align-middle">{{ $rs->electeurs_code }}</td>
                            <td class="align-middle">{{ $rs->partie }}</td>  
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('candidats.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                    <a href="{{ route('candidats.edit', $rs->id)}}" type="button" class="btn btn-warning">Modifiez</a>
                                    <form action="{{ route('candidats.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger m-0">supprimez</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="5">Candidat not found</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <!-- Le tableau existant -->
<table class="table table-hover">
    <!-- ... Votre code HTML existant ... -->
</table>

<!-- Nouveau tableau pour le récapitulatif parrain et partie -->
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>Parrain</th>
            <th>Partie</th>
            <th>Photo</th> <!-- Nouvelle colonne pour la photo -->
        </tr>
    </thead>
    <tbody>
        @foreach($candidat as $rs)
            <tr>
                <td>{{ $rs->nom }}</td>
                <td>{{ $rs->partie }}</td>
                <td>
                <img src="{{ asset('admin_assets/img/' . str_replace(' ', '_', $rs->nom) . '.jpg') }}" alt="{{ $rs->nom }}" width="50" height="50">

                </td>
            </tr>
        @endforeach
    </tbody>
</table>


    

        
    @endsection
