@extends('layouts.app')
@section('content')
<style>

    label ,input{
        display: inline-block;
        width: 125px;
        margin-bottom: 15px;

    }
    label{
        margin-right: 60px;
    }
</style>

<div class="aze">
    <div class="card" style="margin: 20px">
    <div class="card-header">Edit  Commande</div>
    <div class="card-body">
    {{-- <form action="{{ route('CommandeAchat.update', $CommandeAchats->id) }}" method="POST"> --}}
        {{-- <form action="{{url('CommandeAchat/')}}" method="POST"> --}}
            <form action="{{ route('CommandeAchat.update', $CommandeAchat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Date Commande</label>

                <input type="datetime" name="dateCom" value="{{ $CommandeAchat->dateCom }}">

            @error('dateCom')
            <div>{{ message }}</div>
            @enderror




        <div>

            <label for="">Fournisseur:</label>
            <select name="fournisseur_id" id="" name="fournisseur_id">
                @foreach ( app\Models\Fournisseur::all() as $CommandeAchat )
                    <option value="{{$CommandeAchat->id}}"> {{$CommandeAchat->nom}} </option>
                @endforeach
            </select>
            @error('fournisseur_id')
            <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
</div>


        <br>
        <div>
        <button type="submit" value="Update" class="btn btn-outline-secondary">Edit</button>
        </div>
    </form>
</div>

@endsection
