@extends('Layouts.app')
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
        margin-bottom: 15px;
    }
    .aze{
     margin-top:10%
    }


 </style>
    <div class="aze">
<div class="card" style="margin: 20px">
<div class="card-header">Edit commande</div>
<div class="card-body">
    <form action="{{url('commandes/'.$commandes->id)}}" method="post">

        {{ csrf_field() }}

        @method("PATCH")




        {{-- <label for="">Id:</label><br>
        <input type="text" id="" name="id" class="from-control"  value="{{$commandes->client_id}}"><br> --}}


        <label for="">Date Commande:</label><br>
        <input type="text" id="dateCom" name="dateCom" class="from-control"  value="{{$commandes->dateCom}}"><br>


        <label for="">Commande:</label><br>
        <input type="text" id="commandes" name="commandes" class="from-control"  value="{{$commandes->commandes}}"><br>


        <button  type="submit" style=" background-color:	#1a6167;  value="Update"  class="btn btn-success btn-sm">Modifier<br>

        <a href="/commandes"><button type="submit" value="update" class="btn btn-danger btn-sm">Return</button></a>
    </form>
</div>
</div>

</div></div>
@stop

