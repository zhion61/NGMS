@extends('layouts.master')
@section('sidebar')
<div class="sidebar">
  <a href="/">Home</a>
  <a href="/subjects">Subjects</a>
  <a href="/strands">Strands</a>
  <a class="active" href="/teachers">Teachers</a>
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
					<th scope="col">Advisory Section</th>
<!-- 					<th scope="col"><a href="/teachers/{{$teacher->id}}/edit">Edit</th>
 -->				</tr>
			<tbody>
				@foreach($teachers as $teacher)
					<tr>
						<td>{{ $teacher->id }}</td>
						<td>{{ $teacher->name }}</td>
						<td>{{ $teacher->advisory }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/teachers/add'>Add Teacher</a>
        </div>
	</br>
@endsection