@extends('index')
@section('content')

<h1 align="center">Liste Matieres</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Codemat</th>
            <th>Libelle</th>
            <th>Coef</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($matieres as $matiere)
    <tr>
        <td><a href="matiere/{{$matiere->id}}">{{$matiere->codemat}}</a> </td>
        <td><a href="matiere/{{$matiere->id}}">{{$matiere->libelle}}</a> </td>
        <td><a href="matiere/{{$matiere->id}}">{{$matiere->coef}}</a> </td>

        <td class="table-buttons">

        <a href="{{ route('matiere.show', $matiere->id) }}" class="btn btn-dark">
          SHOW
        </a>

        <a href="{{ route('matiere.edit', $matiere->id) }}" class="btn btn-info">
          EDIT
        </a>
        @if (Route::has('login'))
        <form method="POST" action="{{ route('matiere.destroy', $matiere->id) }}">
        @endif
         @csrf
         @method('DELETE')
            <button type="submit" class="btn btn-danger">
              delete
            </button>
        </form>
      </td>
    </tr>
    @endforeach
    </tbody>
</table>
{{$matieres->links()}}
<hr>
<a href="matiere/create">Ajouter Matiere</a>

@endsection