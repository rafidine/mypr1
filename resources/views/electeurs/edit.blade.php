@extends('layouts.app')

@section('nom', 'Modifier Parrainnage')

@section('contents')
    <h1 class="mb-0">Modifier Parrainnage</h1>
    <hr />
    <form action="{{ route('electeurs.update', $electeur->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ $electeur->nom }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Electeur Code</label>
                    <input type="text" name="electeur_code" class="form-control" placeholder="Electeur Code" value="{{ $electeur->electeur_code }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Localité</label>
                    <select class="form-select" name="localite">
                        <option value="" disabled selected>Choisir une région</option>
                        <option value="Dakar" @if($electeur->localite == 'Dakar') selected @endif>Dakar</option>
                        <option value="Diourbel" @if($electeur->localite == 'Diourbel') selected @endif>Diourbel</option>
                        <option value="Fatick" @if($electeur->localite == 'Fatick') selected @endif>Fatick</option>
                        <option value="Kaffrine" @if($electeur->localite == 'Kaffrine') selected @endif>Kaffrine</option>
                        <option value="Kaolack" @if($electeur->localite == 'Kaolack') selected @endif>Kaolack</option>
                        <option value="Kédougou" @if($electeur->localite == 'Kédougou') selected @endif>Kédougou</option>
                        <option value="Kolda" @if($electeur->localite == 'Kolda') selected @endif>Kolda</option>
                        <option value="Louga" @if($electeur->localite == 'Louga') selected @endif>Louga</option>
                        <option value="Matam" @if($electeur->localite == 'Matam') selected @endif>Matam</option>
                        <option value="Saint-Louis" @if($electeur->localite == 'Saint-Louis') selected @endif>Saint-Louis</option>
                        <option value="Sédhiou" @if($electeur->localite == 'Sédhiou') selected @endif>Sédhiou</option>
                        <option value="Tambacounda" @if($electeur->localite == 'Tambacounda') selected @endif>Tambacounda</option>
                        <option value="Thiès" @if($electeur->localite == 'Thiès') selected @endif>Thiès</option>
                        <option value="Ziguinchor" @if($electeur->localite == 'Ziguinchor') selected @endif>Ziguinchor</option>
                        <!-- Ajoutez ici d'autres régions avec des options -->
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Parrain</label>
                    <select class="form-select" name="parrain">
                        <option value="OuSMANE SONKO" @if($electeur->parrain == 'OuSMANE SONKO') selected @endif>OuSMANE SONKO</option>
                        <option value="KHALIFA SALL" @if($electeur->parrain == 'KHALIFA SALL') selected @endif>KHALIFA SALL</option>
                        <option value="BOUGANNE GUEYE" @if($electeur->parrain == 'BOUGANNE GUEYE') selected @endif>BOUGANNE GUEYE</option>
                        <option value="KARIM WADE" @if($electeur->parrain == 'KARIM WADE') selected @endif>KARIM WADE</option>
                        <!-- Ajoutez ici d'autres options pour le parrain -->
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="d-grid">
                    <button class="btn btn-warning">Modifiez</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
