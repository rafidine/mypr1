@extends('layouts.app')
  
@section('nom', 'Show Electeur')
  
@section('contents')
    <h1 class="mb-0">Detail Electeur</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">nom</label>
            <input type="text" name="nom" class="form-control" placeholder="nom" value="{{ $electeur->nom }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">localite</label>
            <input type="text" name="localite" class="form-control" placeholder="localite" value="{{ $electeur->localite }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">electeur_code</label>
            <input type="text" name="electeur_code" class="form-control" placeholder="Electeur Code" value="{{ $electeur->electeur_code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">parrain</label>
            <textarea class="form-control" name="parrain" placeholder="parrain" readonly>{{ $electeur->parrain }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label"></label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $electeur->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $electeur->updated_at }}" readonly>
        </div>
    </div>
@endsection