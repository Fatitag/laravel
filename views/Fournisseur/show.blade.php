@extends('layouts.app')
@section('content')

<style>
    .head{
        margin-top: 10px;
        margin-bottom: 30px;
    }
    .aaa{

        background-color:	#1a6167;
        color: white;

        width: 152px;
        margin-left: 40%;
        text-align: center;

    }
    h5 ,p{
        padding-bottom: 15px
    }



    .card-header
    {
     background-color: 	#315e62;


    }
    .card-body{
        justify-content: center;

    }

    .aze{
     margin-top:3%
    }
</style>
<div class="aze">
    <div class="card" style="margin: 20px">

    <div class="card-header " style="color: white; font-size:20px;"> Data Fournisseur : {{ $Fournisseur->id }}</div>
    <div class="card-body ">
        <div class="card-body">


    <div>

    </div>
    <div>
        <p><b>Nom : </b> {{$Fournisseur->nom}} </p>
        <p><b>Téléphone : </b> {{ $Fournisseur->telephone }} </p>
        <p><b>Email : </b> {{ $Fournisseur->email }} </p>
        <p><b>Ville : </b> {{ $Fournisseur->ville }} </p>
        <p><b>Address : </b> {{ $Fournisseur->adresse }} </p>
    </div>
</div>
</div>
<a  href="/Fournisseur"><button class="aaa   btn-center btn-sm " type="submit"   >Return</button></a>
<hr>
</div></div>

@endsection
