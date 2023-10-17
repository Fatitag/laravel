@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container">

    <table class="table" >


        <div class="card-body">

    <div class="table-responsive"></div>

        <thead>
        <tr>

            <th>Date Commande </th>
            <th>Commande</th>
            <th>Action</th>
         </tr>
         @foreach ($commandes as $commandes)
         <tr>



             <td>{{$commandes->dateCom}}</td>
             <td>{{$commandes->commandes}}</td>
                <td>
                    <div class="d-flex justify-content">
                    <a href="{{ route('commandes.edit', $commandes->id) }}">
                        <button  class="btn btn-dark  btn-sm">Edit</button>
                    </a>
                    <a href="{{ route('commandes.show', $commandes->id) }}">
                        <button class="btn btn-primary  btn-sm">Show</button>
                    </a>
                    <form action="{{ route('commandes.destroy', $commandes->id) }}" method="post"
                          onSubmit="return confirm ('Do you want delete this command ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"  class="btn btn-danger btn-sm">Delete</button>
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
<a  href="{{route('commandes.create')}}" style="color: black" class="btn btn-danger justify-center text-light btn-sm" title="Ajouter"> Ajouter</a><br>

</body>
</html>
@endsection



