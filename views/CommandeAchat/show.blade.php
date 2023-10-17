@extends('layouts.app')
@section('content')

<style>
    .head{
        margin-top: 10px;
        margin-bottom: 30px;
        color: cadetblue
    }
    .aaa{
        margin-left: 50%;
        background-color:	#1a6167;
        color: white;


    }
</style>

<div class="aze">
    <div class="card" style="margin: 20px">
    <div class="card-header " style="color:white;  background-color:	#1a6167; font-size:30px">Commande Page</div>
    <div>
        <h5 class="head"> Data de Commande d'Achat : {{ $CommandeAchat->id }}</h5>
    </div>
    <div>
        <p><b>Command Date : </b> {{ $CommandeAchat->dateCom }} </p>
        <p><b>Fournisseur id : </b> {{ $CommandeAchat->fournisseur_id }} </p>
        <p><b>Nom de Fournisseur: </b> {{$CommandeAchat->Fournisseur->nom}}</p>
    </div>
</div>

<a  href="/CommandeAchat"><button class="aaa   btn-center btn-sm " type="submit"   >Retourn</button></a>

@endsection
