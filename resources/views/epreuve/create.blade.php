@extends('index')
@section('content')
<h1 align="center">Insert Epreuve</h1><br>


	<form class="form-horizontal" method="post" action="{{ url('epreuve') }}">
		
       {{csrf_field()}}
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">numepreuve:</label>  
			  <div class="col-md-4">
			  <input id="name" name="numepreuve" type="text" placeholder="Enter numepreuve" class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="color">datepreuve:</label>  
			  <div class="col-md-4">
			  <input id="color" name="datepreuve" type="date" placeholder="Enter datepreuve" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="company">lieu:</label>  
			  <div class="col-md-4">
			  <input id="company" name="lieu" type="text" placeholder="Enter lieu" class="form-control input-md">
			    
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