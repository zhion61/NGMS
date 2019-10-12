@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/teachers/store">
			@csrf
		  <div class="form-group">
		    <label for="Name">Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Name">
		  </div>
		  <div class="form-group">
		  <label for="advisory">Section
		  <select class="form-control" id="advisory" name="advisory">
			@foreach($sections as $section)
			<option value='{{ $section->id }}'>{{ $section->name }}</option>
			@endforeach
	      </select>
	      </label>
	  </div>
	  </br>
	  </br>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection