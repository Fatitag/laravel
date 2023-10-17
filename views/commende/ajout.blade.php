@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('commandes.store') }}" method="POST">
        @csrf

<style>
    label{
        display: inline-block;
        width: 125px;
        padding-bottom: 15px
    }
</style>
<div class="card" style="margin:20px;">
    <div class="card-header" > Create New Commande  </div>
    <div class="card-body">
        <form action="{{url('commandes')}}" method="POST">
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


<div>

            <label for="">Client:</label>
            <select name="client_id" id="">
                @foreach ( $clients as $client )
                    <option value=" {{$client->id}} "> {{$client->nomprenom}} </option>
                @endforeach
            </select>
</div>
<div>
    <label for="">Commande:</label>
    <input type="text" id="commandes" name="commandes">
</div>


          {{-- <label for="">Date</label>
          <input type="date"><br> --}}


            <label>{{ __('Date Commande:') }}</label>

                <input type="datetime-local" name="dateCom" class="  @error('dateCom') is-invalid @enderror">
            </div>
            @error('dateCom')
            <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror



          <div>
            <button type="submit" class="btn btn-secondary" style="margin-left: 10px;  padding-left:30px; padding-right:30px;  background-color:	#1a6167; ">Add</button>
            </div>

  </div>



        </form>
    </div>

</div>
@stop

