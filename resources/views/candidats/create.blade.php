@extends('layouts.app')

@section('nom', 'Creer candidat')

@section('contents')
    <h1 class="mb-0">liste candidat creer</h1>
    <hr />
    <form action="{{ route('candidats.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="col-md-6">
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
            <div class="col-md-6">
                <div class="form-group">
                    <label for="electeurs_code">Code Electeur</label>
                    <input type="text" name="electeurs_code" class="form-control" placeholder="Code Electeur">
                </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                    <label for="partie">Partie</label>
                    <input type="text" name="partie" class="form-control" placeholder="Partie">
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
