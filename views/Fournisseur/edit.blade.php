@extends('layouts.app')
@section('content')
<style> .card-header
    {
        background-color:	#1a6167;
        color: white;

    }
    .card-body{
        justify-content: center;

    }
    button{
        display: inline-flex;
        width: 152px;
        margin-left: 40%;
        margin-bottom: 15px
    }


label , input{
    margin-bottom: 15px;

}
label{
    font-style: italic ;
    font-size: 20pt;

    width: 125px;


}
    </style>
<div class="aze">
    <div class="card" style="margin: 20px">
    <div class="card-header">Edit  Produit</div>
    <div class="card-body">
    <form action="{{ route('Fournisseur.update', $Fournisseur->id) }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label>Nom:</label>

                <input type="text" name="nom" value="{{ $Fournisseur->nom }}">

            @error('nom')
            <div>{{ message }}</div>
            @enderror
        </div>



        <div>
            <label>Téléphone:</label>

                <input type="text" name="telephone" value="{{ $Fournisseur->telephone }}">

            @error('telephone')
            <div>{{ message }}</div>
            @enderror
        </div>



        <div>
            <label>Email:</label>

                <input type="text" name="email" value="{{ $Fournisseur->email }}">

            @error('email')
            <div>{{ message }}</div>
            @enderror
        </div>



        <div>
            <label>Ville</label>

                <input type="text" name="ville" value="{{ $Fournisseur->ville }}">
            </div>
            @error('ville')
            {{ message }}</div>
            @enderror
        </div>



        <div>
            <label>Adresse</label>

            <input type="text" name="adresse" value="{{ $Fournisseur->adresse }}">
         </div>
         @error('adresse')
        {{ message }}</div>
        @enderror
        </div>

        <br>

        <button type="submit" class="btn btn-outline-secondary">Edit</button>

 </form>
</div>

</div>

@endsection
