@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{ route('User.update', $User->id) }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label>Nom & Prenom</label>
            <div>
                <input type="text" name="name" value="{{ $User->name }}">
            </div>
            @error('name')
            <div>{{ message }}</div>
            @enderror
        </div>


        <div>
            <label>Email:</label>
            <div>
                <input type="email" name="email" value="{{ $User->email }}">
            </div>
            @error('email')
            <div>{{ message }}</div>
            @enderror
        </div>


        <div>
            <label>Mot De Passe:</label>
            <div>
                <input type="text" name="password" value="{{ $User->password }}">
            </div>
            @error('password')
            <div>{{ message }}</div>
            @enderror
        </div>


        <div>
            <select name="type" id="type">
                <option value="Gerant">Gerant</option>
                <option value="Vendeur">Vendeur</option>
                <option value="Magazinier">Magazinier</option>
            </select>
        </div>


        <br>
        <div>
        <button type="submit" class="btn btn-outline-secondary">Edit</button>
        </div>

    </form>
</div>

@endsection
