@extends('Layouts.app')
@section('content')
<style>
   h5 ,p{
       padding-bottom: 15px
   }



   .card-header
   {
    background-color: rgb(226, 90, 90);


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
<div class="card-header ">Clients Page</div>


<div class="card-body ">
    <div class="card-body">

    <h5 class="card-title">Nom et Prenom:              {{$clients->nomprenom}}</h5>

        <h5 class="card-text">Email:          {{$clients->email}}</h5>
        <h5 class="card-text">Adresse:        {{$clients->adresse}}</h5>
    </div>
</div>
<a href="/clients"><button type="submit" class="btn btn-danger btn-center btn-sm">Return</button></a>
<hr>
</div></div>
@stop




