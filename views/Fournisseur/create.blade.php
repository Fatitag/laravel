@extends('layouts.app')
@section('content')



<div class="card" style="margin:20px;">
    <div class="card-header" style=" background-color:	#1a6167; color:white" > Ajouter Fournisseur  </div>
    <div class="card-body">
    <form action="{{ route('Fournisseur.store') }}" method="post">
        @csrf

        <div>
            <label>Name</label>
            <div>
                <input type="text" name="nom" class="form-control mb-1 @error('nom') is-invalid @enderror">
            </div>
            @error('nom')
            <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>



        <div>
            <label>Téléphone:</label>
            <div>
                <input type="text" name="telephone" class="form-control mb-1 @error('telephone') is-invalid @enderror">
            </div>
            @error('telephone')
            <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>



        <div>
            <label>Email</label>
            <div>
                <input type="email" name="email" class="form-control mb-1 @error('email') is-invalid @enderror">
            </div>
            @error('email')
            <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>



        <div>
            <label>Ville</label>
            <div>
                <input type="text" name="ville" class="form-control mb-1 @error('ville') is-invalid @enderror">
            </div>
            @error('ville')
            <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>



        <div>
            <label>Adresse</label>
            <div>
                <input type="text" name="adresse" class="form-control mb-1 @error('adresse') is-invalid @enderror">
            </div>
            @error('adresse')
            <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>

        <br>
        <div>
        </div>

        <div>
        <button type="submit" class="btn btn-outline-secondary " style=" background-color:	#1a6167; color:white; margin-left:50%;">Ajouter</button>
        </div>
    </form>
</div>

@endsection
