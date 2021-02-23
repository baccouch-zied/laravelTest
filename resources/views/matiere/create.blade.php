@extends('index')
@section('content')
<h1 align="center">Insert Matiere</h1><br>


	<form class="form-horizontal" method="post" action="{{ url('matiere') }}">
		
       {{csrf_field()}}
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Codemat:</label>  
			  <div class="col-md-4">
			  <input id="name" name="codemat" type="text" placeholder="Enter Codemat" class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="color">Libelle:</label>  
			  <div class="col-md-4">
			  <input id="color" name="libelle" type="text" placeholder="Enter Libelle" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="company">Coef:</label>  
			  <div class="col-md-4">
			  <input id="company" name="coef" type="text" placeholder="Enter coef" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Save</button>
			  </div>
			</div>

			</fieldset>
		</form>

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

@endsection

 