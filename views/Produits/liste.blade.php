@extends('layouts.app')
@section('content')
<style>
    *{
        box-sizing: border-box
    }
    body{
        margin: 0;
        background-image: url("102647.jpg");
        background-size:cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;

    }
    .container{
        position: relative;
        max-width: 100%;
        margin: 0 auto;
    }

     .table{


        background: rgba(0, 0, 0, 0.5);
        color: white;
        width: 100%;

    }

</style>


    <div class="container">

<table class="table" >

    <div>
        <h2 style="color: white">Page des Produits</h2>
    </div>


                    <div class="card-body">

<div class="table-responsive"></div>

    <thead>
    <tr>
       <th>Libelle</th>
        <th>Type Produit</th>
        <th>Prix</th>
        <th>Image</th>

        <th>Description</th>
        <th>Qantité de Stock</th>
        <th>Action</th>
     </tr>
    </thead>
    <tbody




     @foreach ($Produits as $TypeProduits)
        <tr>
            <td> {{$TypeProduits->libelle}}   </td>
            <td>{{$TypeProduits->typeProduit_id}}</td>
            <td>{{$TypeProduits->prix}}</td>
            <td><img src="/storage/{{ $TypeProduits->image }}" width="100px    " alt=""></td>


            <td>{{$TypeProduits->description}}</td>
            <td>{{$TypeProduits->qtStock}}</td>
            <td>
                <div class="d-flex justify-content">
                <a href="{{ route('Produit.edit', $TypeProduits->id) }}">
                    <button  class="btn btn-dark  btn-sm">Edit</button>
                </a>
                <a href="{{ route('Produit.show', $TypeProduits->id) }}">
                    <button class="btn btn-primary  btn-sm">Show</button>
                </a>
                <form action="{{ route('Produit.destroy', $TypeProduits->id) }}" method="post"
                      onSubmit="return confirm ('Do you want delete this  Produit ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"   class="btn btn-danger btn-sm">Delete</button>
                </form>
                </div>
            </td>

        </tr>
                    </div>

                </div>

            </div>

        </div>
    </div>


       @endforeach

</table>
<a  href="{{route('Produit.create')}}" style="color: black" class="btn btn-danger justify-center text-light btn-sm" title="Ajouter"> Ajouter</a><br>

</body>
</html>
@endsection
