@extends('layouts.app')
@section('content')

<style>
    .add{
        text-decoration: none;
    }
    .d1{
        margin-bottom: 60px;
        margin-top: 60px
    }


</style>

<div class="container">

    <table class="table" >


                        <div class="card-body">




 @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif


        <div class="container d1">
            <div class="row">
                <div class="col-sm-8">
                <h1 style="display:flex; justify-content">User List </h1>
                </div>

            </div>
        </div>




    <table class="table table-sm">
        <thead>
            <tr>
               
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($User as $User)
            <tr>

                <td>{{ $User->name }}</td>
                <td>{{ $User->email }}</td>
                <td>{{ $User->password }}</td>
                <td>{{ $User->type }}</td>
                <td>
                    <div class="d-flex justify-content">
                    <a href="{{ route('User.edit', $User->id) }}">
                        <button>Edit</button>
                    </a>
                    <a href="{{ route('User.show', $User->id) }}">
                        <button>Show</button>
                    </a>
                    <div>
                    <form action="{{ route('User.destroy', $User->id) }}" method="POST" onSubmit="return confirm('Do you want really delete this User ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    <div class="col-sm-4">
        <a class="d-flex justify-content-center add" href="{{route('User.create')}}">
            <button class="btn-sm" style="  background-color:	#1a6167;
            color: white;">Ajouter User</button>
        </a>
        </div>



</div>
@endsection
