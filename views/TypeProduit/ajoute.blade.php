@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{ route('TypeProduit.store') }}" method="post">
        @csrf

        <div>
            <label>{{ __('libelle') }}</label>
            <div>
                <input type="text" name="libelle" class="form-control mb-1 @error('libelle') is-invalid @enderror">
            </div>
            @error('libelle')
            <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>

        <br>
        <div>
        <button type="submit" class="btn btn-outline-secondary">Add</button>
        </div>

    </form>
</div>

@endsection
