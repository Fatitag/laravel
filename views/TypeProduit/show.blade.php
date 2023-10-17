@extends('layouts.app')
@section('content')

<style>
    h5 ,p{
        padding-bottom: 15px
    }



    .card-header
    {
     background-color: 	#315e62;;


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
     margin-top:10%
    }


 </style>

<div class="aze">
    <div class="card" style="margin: 20px">
    <div class="card-header ">Type Produit Page</div>


    <div class="card-body ">
        <div class="card-body">
        <div>
            <h1 class="head"> Type Produit : {{ $TypeProduit->id }}</h1>
        </div>
        <div>
            <p><b>Id : </b> {{ $TypeProduit->id }} </p>
            <p><b>Libelle : </b> {{ $TypeProduit->libelle }} </p>
        </div>
         </div>
    </div>
    <a href="/TypeProduit"><button type="submit" style=" color:white; background-color:	#1a6167;" class="btn btn btn-center btn-sm">Return</button></a>
    </div>
</div>


@endsection
