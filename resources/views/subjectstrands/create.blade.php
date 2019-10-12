@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/subjectstrands/store">
			@csrf
		  <div class="form-group">
		    <label for="SubjectID">Subject ID</label>
		    <input type="text" class="form-control" name="subject_id" placeholder="SubjectID">
		  </div>
		  <div class="form-group">
		    <label for="StrandID">Strand ID</label>
		    <input type="text" class="form-control" name="strand_id" placeholder="StrandID">
		  </div>
		  <div class="form-group">
		    <label for="Semester">Semester</label>
		    <input type="text" class="form-control" name="semester" placeholder="Semester">
		  </div>
		  <div class="form-group">
		    <label for="GradeLevel">Grade Level</label>
		    <input type="text" class="form-control" name="grade_level" placeholder="GradeLevel">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection