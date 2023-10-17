@extends('Layouts.app')
@section('content')

<style> .card-header
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
        margin-bottom: 15px
    }
    .aze{
     margin-top:10%
    }

label , input{
    margin-bottom: 15px;

}
label{
    font-style: italic ;
    font-size: 20pt

}
    </style>
    <div class="aze">
<div class="card" style="margin: 20px">
<div class="card-header">Edit Client</div>
<div class="card-body">

    <form action="{{url('clients/'.$clients->id)}}" method="post">
        {{ csrf_field() }}

        @method("PATCH")




        <label for="">Nom et Prenom:</label><br>
        <input type="text" id="nom" name="nomprenom" class="from-control"  value="{{$clients->nomprenom}}"><br>





        <label for="">Email:</label><br>
        <input type="email" id="email" name="email" class="from-control"  value="{{$clients->email}}"><br>

        <label for="">Adresse:</label><br>
        <input type="text" id="adresse" name="adresse" class="from-control"  value="{{$clients->adresse}}"><br>
        <button type="submit" value="Update"  class="btn btn-success btn-sm">Modifier<br>

        <a href="/index"><button type="submit" value="update" class="btn btn-danger btn-sm">Return</button></a>
    </form>
</div>
</div>

</div></div>
@stop

