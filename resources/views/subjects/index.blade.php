@extends('layouts.master')
@section('sidebar')
<div class="sidebar">
  <a href="/">Home</a>
  <a class="active" href="/subjects">Subjects</a>
  <a href="/strands">Strands</a>
  <a href="/teachers">Teachers</a>
  <a href="/sections">Sections</a>
  <a href="/subjectstrands">Subject Strands</a>
</div>
@endsection
@section('content')
	<div class="container">
		<table class="table">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
				</tr>
			<tbody>
				@foreach($subjects as $subject)
					<tr>
						<td>{{ $subject->id }}</td>
						<td>{{ $subject->name }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/subjects/add'>Add Subject</a>
	</br>
@endsection