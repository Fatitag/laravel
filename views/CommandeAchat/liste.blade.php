@extends('layouts.app')
@section('content')

<div class="container">

<style>
    .a{
        text-decoration: none;
    }
    .add{
        text-decoration: none;
    }
    .d1{
        margin-bottom: 100px;
        margin-top: 60px
    }
    button{
        margin-right: 15px;
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

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

        <div class="container d1">
            <div class="row">
                <div class="col-sm-6">
                <h1 style="display:flex; color:white">Liste de Commande d'Achat </h1>
                </div>

        </div>


    <table class="table table-sm">
        <thead>
            <tr>
                <th>Nom de fournisseur</th>
                <th>Command's Date</th>

                <th style="margin-left:30%">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ( $CommandeAchat as $Fournisseur )
            <tr>

                <td>{{ $Fournisseur->Fournisseur->nom}}</td>
                <td>{{ $Fournisseur->dateCom }}</td>


                <td>
                    <div class="d-flex justify-content">
                    <a href=" {{route('CommandeAchat.edit', $Fournisseur->id)}} ">
                        <button class="btn btn-dark  btn-sm">Edit</button>
                    </a>
                    <a href=" {{route('CommandeAchat.show', $Fournisseur->id)}} ">
                        <button class="btn btn-primary  btn-sm">Show</button>
                    </a>
                    <form action="{{ route('CommandeAchat.destroy', $Fournisseur->id) }}" method="post"
                          onSubmit="return confirm ('Do you want to delete this Command ?')">
                        @csrf
                        @method('DELETE')
                        <button  class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-sm-4">
        <a class=" justify-content-center btn-sm add" href="{{route('CommandeAchat.create')}}">
            <button class=" btn-sm" style=" background-color:	#1a6167; color:white;">Ajouter  Commande</button>
        </a>
        </div>
    </div>


</div>

@endsection
