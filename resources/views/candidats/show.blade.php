@extends('layouts.app')
  
@section('nom', 'Show Candidature')
  
@section('contents')
    <h1 class="mb-0">Detail Candidature</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">nom</label>
            <input type="text" name="nom" class="form-control" placeholder="nom" value="{{ $candidat->nom }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">localite</label>
            <input type="text" name="localite" class="form-control" placeholder="localite" value="{{ $candidat->localite }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">electeur Code</label>
            <input type="text" name="electeurs_code" class="form-control" placeholder="electeur Code" value="{{ $candidat->electeurs_code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">partie</label>
            <textarea class="form-control" name="partie" placeholder="partie" readonly>{{ $candidat->partie }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $candidat->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $candidat->updated_at }}" readonly>
        </div>
    </div>
@endsection
