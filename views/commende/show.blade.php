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
     margin-top:10%
    }


 </style>

<div class="aze">
<div class="card" style="margin: 20px">
<div class="card-header " style="color:white;  font-size:30px">Commande Page</div>


<div class="card-body ">
    <div class="card-body">

    <h5   style=" font-size: 20px; text-dicoration: italy;" class="card-title"><b>id:  </b>            {{$commandes->id}}</h5>
        <h5 style=" font-size: 20px; text-dicoration: italy;"  class="card-title"> <b> Commande: </b>      {{$commandes->dateCom}}</h5>
        <h5 style=" font-size: 20px; text-dicoration: italy;"   class="card-text"> <b> commande: </b>        {{$commandes->commandes}}</h5>

    </div>
</div>
<a href="/commandes"><button type="submit" style=" background-color:	#1a6167;  color:white" class="btn btn btn-center btn-sm">Return</button></a>
<hr>
</div></div>
@stop
