@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container">
    <div>
        <h1 >Type Produit List </h1>
        </div>

    <table class="table" >


        <div class="card-body">

    <div class="table-responsive"></div>

        <thead>
        <tr>
            <th>ID </th>
            <th>Libelle</th>

            <th>Action</th>
         </tr>
         @foreach ($TypeProduits as $TypeProduits)
         <tr>
             <td>{{$TypeProduits->id}}</td>


             <td>{{$TypeProduits->libelle}}</td>

                <td>
                    <div class="d-flex justify-content">
                    <a href="{{ route('TypeProduit.edit', $TypeProduits->id) }}">
                        <button  class="btn btn-dark  btn-sm">Edit</button>
                    </a>
                    <a href="{{ route('TypeProduit.show', $TypeProduits->id) }}">
                        <button class="btn btn-primary  btn-sm">Show</button>
                    </a>
                    <form action="{{ route('TypeProduit.destroy', $TypeProduits->id) }}" method="post"
                          onSubmit="return confirm ('Do you want delete this Type Produit ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"   class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    </div>
                </td>

</tr>
            </div>

        </div>

    </div>

</div>
</div>


@endforeach
</table>
<a  href="{{route('TypeProduit.create')}}" style="color: light ; background-color:	#1a6167; " class="btn btn justify-center text-light btn-sm" title="Ajouter"> Ajouter</a><br>

</body>
</html>
@endsection
