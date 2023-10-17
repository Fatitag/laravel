@extends('layouts.app')
@section('content')
<style>
    *{
        box-sizing: border-box
    }
    body{
        margin: 0;
        background-image: url("photo12.jpg");
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


                    <div class="card-body">



    <thead>
    <tr>

        <th> NOM et PRENOM</th>

        <th>EMAIL</th>
        <th>Adress</th>
        <th>Action</th>
     </tr>
    </thead>
    <tbody




     @foreach ($clients as $clients)
        <tr>

            <td>{{$clients->nomprenom}}</td>

            <td>{{$clients->email}}</td>
            <td>{{$clients->adresse}}</td>
            <td>
          <a href="{{url('/clients/'.$clients->id)}}" title="View clients"><button  class="btn btn-primary  btn-sm" >Show</button></a>
          <a href="{{url('/clients/'.$clients->id .'/edit')}}"><button  class="btn btn-dark  btn-sm" >Edit</button></a>

<form action="{{route("clients.destroy" , $clients->id)}}" accept-charset="UTF-8"  method="post">

            @csrf
            @method('DELETE')
            {{ csrf_field() }}
            <button type="submit"  class="btn btn-danger deleteCategoryBnt">Supprimer</button></a>



           </form>


            </td>

        </tr>
                    </div>

                </div>

            </div>

        </div>
    </div>


       @endforeach
</table>
<a  href="{{url('/clients/create')}}" class="btn btn-black justify-center text-light btn-sm" title="Ajouter"> Ajouter</a><br>

</body>
</html>
@endsection
