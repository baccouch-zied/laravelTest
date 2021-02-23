@extends('index')

@section('content')
	<h1>Show Matiere</h1>
	<div>
		<h2>{{$matiere->codemat}}</h2>
	</div>

    <p>
		<h2>{{$matiere->libelle}}</h2>
	</p>

	<p>
		<h2>{{$matiere->coef}}</h2>
	</p>
	<a href="{{$matiere->id}}/edit">Edit Matiere</a>
@endsection