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
        margin-bottom: 15px

    }
    .aze{
     margin-top:3%
    }
    label{
        color: cadetblue;
        font-size: 20px;
    }


 </style>
    <div class="aze">
<div class="card" style="margin: 20px">
<div class="card-header">Edit  Produit</div>
<div class="card-body">
    <form action="{{ route('Produit.update', $Produits->id) }}" method="post">

        {{ csrf_field() }}

        @method("PATCH")

        <label for="">Libelle</label><br>
        <input type="text" id="libelle" name="libelle"  value="{{$Produits->libelle}}"><br>



        <label for="">Type de Produit:</label><br>
        <input type="text" id="typeProduit_id" name="typeProduit_id" class="from-control"  value="{{$Produits->typeProduit_id}}"><br>

        <label for="">Prix:</label><br>
        <input type="text" id="prix" name="prix"  value="{{$Produits->prix}}"><br>

        <div>
            <label>{{ __('image') }}</label>
            <div>
                <input type="file" name="image" value="{{ $Produits->image }}">
            </div>
            @error('image')
            <div>{{ message }}</div>
            @enderror
        </div>

        <label for="">Description:</label><br>
        <input type="text" id="description" name="description" class="from-control"  value="{{$Produits->description}}"><br>

        <label for="">Qantité de Stock:</label><br>
        <input type="text" id="qtStock" name="qtStock" class="from-control"  value="{{$Produits->qtStock}}"><br>








        <button type="submit" value="Update"  style=" background-color:	#1a6167; "" class="btn btn-success btn-sm" >Modifier<br>

        <a href="/Produit"><button type="submit" value="update" class="btn btn-danger btn-sm">Return</button></a>
    </form>
</div>
</div>

</div></div>
@stop
