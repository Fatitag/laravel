@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('Produit.store') }}" method="post">
        @csrf

<style>
    label{
        display: inline-block;
        width: 125px;
        padding-bottom: 15px
    }
</style>
<div class="card" style="margin:20px;">
    <div class="card-header" > Create New Produit  </div>
    <div class="card-body">
        <form action="{{url('Produit')}}" method="post" enctype="multipart/form-data">

            @csrf
            <div>
                <label for="">Labelle:</label>
                <input type="text" id="libelle" name="libelle">
            </div>
            @error('libelle')
            <div class="alert alert-danger text-danger">{{$message}}</div>

            @enderror

           <div>

            <label for="">Type de Produit:</label>
            <select name="typeProduit_id" id="" name="typeProduit_id">
                @foreach ( app\Models\TypeProduit::all() as $Produit )
                    <option value="{{$Produit->id}}"> {{$Produit->libelle}} </option>
                @endforeach
            </select>
            @error('typeProduit_id')
            <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
</div>
<div>
    <label for="">Prix:</label>
    <input type="text" id="Prix" name="prix">
</div>
@error('prix')
<div class="alert alert-danger text-danger">{{$message}}</div>

@enderror
<div>
    <label>{{ __('image') }}</label>

        {{-- <input type="file" name="image" class=" sm-2 mb-1 @error('image') is-invalid @enderror"> --}}
        <input type="file" name="image" class=" sm-2 mb-1 @error('image') is-invalid @enderror">


</div>
<div>
    <label for="">Description:</label>
    <input type="text" id="Description" name="description">
    @error('description')
    <div class="alert alert-danger text-danger">{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="">Qantité de Stock:</label>
    <input type="text" id="Qantité" name="qtStock">
    @error('qtStock')
    <div class="alert alert-danger text-danger">{{ $message }}</div>
    @enderror
</div>


          {{-- <label for="">Date</label>
          <input type="date"><br> --}}







        </div>

 <div>
            <button type="submit" class="btn btn-secondary" style="margin-left: 10px;  padding-left:30px; padding-right:30px;  background-color:	#1a6167; ">Add</button>
            </div>
  </div>



        </form>
    </div>

</div>
@stop

