@extends('layouts.master')
@section('sidebar')
<div class="sidebar">
  <a href="/">Home</a>
  <a href="/subjects">Subjects</a>
  <a href="/strands">Strands</a>
  <a href="/teachers">Teachers</a>
  <a href="/sections">Sections</a>
  <a class="active" href="/subjectstrands">Subject Strands</a>
</div>
@endsection
@section('content')
	<div class="container">
		<table class="table">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Subject ID</th>
					<th scope="col">Strand ID</th>
					<th scope="col">Semester</th>
					<th scope="col">Grade Level</th>
				</tr>
			<tbody>
				@foreach($subjectstrands as $subjectstrand)
					<tr>
						<td>{{ $subjectstrand->id }}</td>
						<td>{{ $subjectstrand->subject_id }}</td>
						<td>{{ $subjectstrand->strand_id }}</td>
						<td>{{ $subjectstrand->semester }}</td>
						<td>{{ $subjectstrand->grade_level }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/subjectstrands/add'>Add Section</a>
	</br>
@endsection