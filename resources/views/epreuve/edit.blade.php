@extends('index')
@section('content')


<h1>Edit Epreuve</h1>
	<form class="form-horizontal" method="post" action="{{route('epreuve.update',$epreuve->id)}}">
		@csrf
        @method('put')
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Numepreuve</label>  
			  <div class="col-md-4">
			  <input id="name" name="numepreuve" type="text" placeholder="Enter numepreuve" class="form-control input-md" value="{{$epreuve->numepreuve}}">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="color">date</label>  
			  <div class="col-md-4">
			  <input id="color" name="datepreuve" type="text" placeholder="Enter datepreuve" class="form-control input-md" value="{{$epreuve->datepreuve}}">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="company">Lieu</label>  
			  <div class="col-md-4">
			  <input id="company" name="lieu" type="text" placeholder="Enter lieu" class="form-control input-md" value="{{$epreuve->lieu}}">
			    
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


@endsection