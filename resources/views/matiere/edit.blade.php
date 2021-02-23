@extends('index')
@section('content')

@if (Route::has('login'))
<h1>Edit Matiere</h1>
	<form class="form-horizontal" method="post" action="{{route('matiere.update',$matiere->id)}}">
		@csrf
        @method('put')
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Codemat</label>  
			  <div class="col-md-4">
			  <input id="name" name="codemat" type="text" placeholder="Enter codemat" class="form-control input-md" value="{{$matiere->codemat}}">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="color">Libelle</label>  
			  <div class="col-md-4">
			  <input id="color" name="libelle" type="text" placeholder="Enter libelle" class="form-control input-md" value="{{$matiere->libelle}}">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="company">Coef</label>  
			  <div class="col-md-4">
			  <input id="company" name="coef" type="text" placeholder="Enter coef" class="form-control input-md" value="{{$matiere->coef}}">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary" >Save</button>
			  </div>
			</div>

			</fieldset>
			
		</form>
		@endif

@endsection