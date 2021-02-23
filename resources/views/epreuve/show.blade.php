@extends('index')

@section('content')
	<h1>Show Epreuve</h1>
	<div>
		<h2>{{$epreuve->numepreuve}}</h2>
	</div>

    <p>
		<h2>{{$epreuve->datepreuve}}</h2>
	</p>

	<p>
		<h2>{{$epreuve->lieu}}</h2>
	</p>
	<a href="{{$epreuve->id}}/edit">Edit epreuve</a>
@endsection