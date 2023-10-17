@extends('layouts.app')
@section('content')

<style>
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
    .aaa{
        background-color:	#1a6167;
        color: white;

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

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

        <div class="container d1">
            <div class="row">
                <div class="col-sm-6">
                <h1 style="display:flex; color:white">Fournisseurs List </h1>
                </div>

            </div>
        </div>

    <table class="table table-sm">
        <thead>
            <tr>

                <th>Name</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $Fournisseur as $Fournisseur )
            <tr>

                <td>{{ $Fournisseur->nom }}</td>
                <td>{{ $Fournisseur->telephone }}</td>
                <td>{{ $Fournisseur->email }}</td>
                <td>{{ $Fournisseur->ville }}</td>
                <td>{{ $Fournisseur->adresse }}</td>
                <td>
                    <div class="d-flex justify-content">
                    <a href="{{ route('Fournisseur.edit', $Fournisseur->id) }}">
                        <button class="btn btn-dark  btn-sm">Edit</button>
                    </a>
                    <a href="{{ route('Fournisseur.show', $Fournisseur->id) }}">
                        <button class="btn btn-primary  btn-sm">Show</button>
                    </a>
                    <form action="{{ route('Fournisseur.destroy', $Fournisseur->id) }}" method="post"
                            onSubmit="return confirm ('Do you want delete this Fournisseur ?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger  btn-sm" type="submit">Delete</button>
                    </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-sm-4">
        <a class=" justify-content-center add" href="{{route('Fournisseur.create')}}">
            <button class="aaa btn-sm">Ajouter un Fournisseur</button>
        </a>
        </div>

</div>

@endsection
