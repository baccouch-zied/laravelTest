@extends('index')
@section('content')

<h1 align="center">Liste Epreuves :</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Numepreuve</th>
            <th>Datepreuve</th>
            <th>Lieu</th>
        </tr>
    </thead>
    <tbody>
    @foreach($epreuves as $epreuve)
    <tr>
        <td>{{$epreuve->numepreuve}}</a> </td>
        <td>{{$epreuve->datepreuve}}</a> </td>
        <td>{{$epreuve->lieu}}</a> </td>

        <td class="table-buttons">

<a href="{{ route('epreuve.show', $epreuve->id) }}" class="btn btn-dark">
  <i class="fa fa-tag">SHOW</i>
</a>

<a href="{{ route('epreuve.edit', $epreuve->id) }}" class="btn btn-info">
  <i class="fa fa-edit" >EDIT</i>
</a>
<form method="POST" action="{{ route('epreuve.destroy', $epreuve->id) }}">
 @csrf
 @method('DELETE')
    <button type="submit" class="btn btn-danger">
      <i class="fa fa-remove">delete</i>
    </button>
</form>
</td>

    </tr>
    @endforeach
    </tbody>
</table>
<hr>
<a href="epreuve/create">Ajouter Epreuve</a>

@endsection