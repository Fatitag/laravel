@extends('layouts.app')
@section('content')

<style>
    .head{
        margin-top: 10px;
        margin-bottom: 30px;
    }
</style>

<div class="container">
    <div>
        <h1 class="head">User Data {{ $User->id }}</h1>
    </div>
    <div>
        <p><b>Name : </b> {{ $User->Fname }} </p>
        <p><b>Email : </b> {{ $User->email }} </p>
        <p><b>Password : </b> {{ $User->password }} </p>
    </div>
</div>

@endsection
