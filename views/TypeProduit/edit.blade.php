@extends('layouts.app')
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
<div class="card-header">Edit Type Produit</div>
<div class="card-body">
    <form action="{{ route('TypeProduit.update', $TypeProduits->id) }}" method="post">

        {{ csrf_field() }}

        @method("PATCH")




        <label for="">Id:</label><br>
        <input type="text" id="" name="id" class="from-control"  value="{{$TypeProduits->id}}"><br>


        <label for="">Libelle</label><br>
        <input type="text" id="libelle" name="libelle" class="from-control"  value="{{$TypeProduits->libelle}}"><br>



        <button type="submit" value="Update"  class="btn btn-success btn-sm">Modifier<br>

        <a href="/TypeProduit"><button type="submit" value="update" class="btn btn-danger btn-sm">Return</button></a>
    </form>
</div>
</div>

</div></div>
@stop
