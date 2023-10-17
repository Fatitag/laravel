@extends('layouts.app')
@section('content')
<style>
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
    button{
        display: inline-flex;
        width: 152px;
        margin-left: 40%;
    }
    .aze{
     margin-top:3%
    }



 </style>

<div class="aze">
<div class="card" style="margin: 20px">
<div class="card-header ">Produit Page</div>


<div class="card-body ">
    <div class="card-body">

        <h5 class="card-text">Libelle:        {{$Produit->libelle}}</h5>
        <h5 class="card-text">Type de Produit:            {{$Produit->typeProduit_id}}</h5>
        <h5 class="card-title">Prix:       {{$Produit->prix}}</h5>
        <p><b>Image : </b> <img src="/storage/{{ $Produit->image }}" width="100px" alt=""> </p>
        <h5 class="card-title">Description:       {{$Produit->description}}</h5>
        <h5 class="card-title">Qantité de Stock:       {{$Produit->qtStock}}</h5>




    </div>
</div>
<a href="/Produit"><button type="submit" style=" background-color:	#1a6167;" class="btn btn btn-center btn-sm">Return</button></a>
<hr>
</div>
</div>
@stop
