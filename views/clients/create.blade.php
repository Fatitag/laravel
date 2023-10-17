@extends('Layouts.app')
@section('content')
<style>

    .form-signin {
      max-width: 330px;
      padding: 15px;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    </style>



<div class="card" style="margin:20px;">
    <div class="card-header"> Create New Student  </div>
    <div class="card-body">
        <form action="{{url('clients')}}" method="POST">
            @if ($errors ->any())
<div class="alert alert-danger">
    <ul>
        @foreach ( $errors->all() as $error)
        <li>{{$error}}</li>

        @endforeach
    </ul>

</div>

@endif
            @csrf




            <label for="">Nom et Prenom :</label><br>
            <input type="text" id="nom" name="nomprenom" class="from-control"><br>





            <label for="">Email:</label><br>
            <input type="email" id="email" name="email" class="from-control"><br>

            <label for="">Adress:</label><br>
            <input type="text" id="adresse" name="adresse" class="from-control"><br>

            <label for="">Ville:</label><br>
            <input type="text" id="ville" name="ville" class="from-control"><br>
            <input type="submit" value="Save" class="btn btn-primary">





        </form>
    </div>

</div>
@stop
