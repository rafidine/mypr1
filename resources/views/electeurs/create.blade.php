@extends('layouts.app')

@section('nom', 'Create Parrain')

@section('contents')
    <h1 class="mb-0">Ajouter Parrain</h1>
    <hr />
    <form action="{{ route('electeurs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="localite">Localite</label>
                    <select class="form-control" name="localite" id="localite">
                        <option value="" disabled selected>Choisir une région</option>
                        <option value="Dakar">Dakar</option>
                        <option value="Diourbel">Diourbel</option>
                        <option value="Fatick">Fatick</option>
                        <option value="Kaffrine">Kaffrine</option>
                        <option value="Kaolack">Kaolack</option>
                        <option value="Kédougou">Kédougou</option>
                        <option value="Kolda">Kolda</option>
                        <option value="Louga">Louga</option>
                        <option value="Matam">Matam</option>
                        <option value="Saint-Louis">Saint-Louis</option>
                        <option value="Sédhiou">Sédhiou</option>
                        <option value="Tambacounda">Tambacounda</option>
                        <option value="Thiès">Thiès</option>
                        <option value="Ziguinchor">Ziguinchor</option>
                        <!-- Ajoutez d'autres options de région ici -->
                    </select>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-group">
                    <label for="electeur_code">Electeur Code</label>
                    <input type="text" name="electeur_code" id="electeur_code" class="form-control" placeholder="Electeur Code">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="parrain">Parrain</label>
                    <select class="form-control" name="parrain" id="parrain">
                        <option value="" disabled selected>Choisir un parrain</option>
                        <option value="OuSMANE SONKO">OuSMANE SONKO</option>
                        <option value="KHALIFA SALL">KHALIFA SALL</option>
                        <option value="BOUGANNE GUEYE">BOUGANNE GUEYE</option>
                        <option value="KARIM WADE">KARIM WADE</option>
                        <!-- Ajoutez d'autres options de parrain ici -->
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-warning" style="background-color: yellow; color: black;">Acceptez</button>
            </div>
        </div>
    </form>
@endsection
