@extends('layouts.app')

@section('nom', 'Modifier Candidature')

@section('contents')
    <h1 class="mb-0">Modifier Candidature</h1>
    <hr />
     <form action="{{ route('candidats.update', $candidat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">nom</label>
                <input type="text" name="nom" class="form-control" placeholder="nom" value="{{ $candidat->nom }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">localite</label>
                <input type="text" name="localite" class="form-control" placeholder="localite" value="{{ $candidat->localite }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">electeur Code</label>
                <input type="text" name="electeurs_code" class="form-control" placeholder="Electeur Code" value="{{ $candidat->electeurs_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">partie</label>
                <textarea class="form-control" name="partie" placeholder="partie" >{{ $candidat->partie }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Modifiez</button>
            </div>
        </div>
    </form>
@endsection
