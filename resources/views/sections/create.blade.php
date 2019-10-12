@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/sections/store">
			@csrf
		  <div class="form-group">
		    <label for="Name">Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Name">
		  </div>
		  <div class="form-group">
		    <label for="Active">Active</label>
		    <input type="text" class="form-control" name="active" placeholder="Active">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection