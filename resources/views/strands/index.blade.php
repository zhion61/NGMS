@extends('layouts.master')
@section('sidebar')
<div class="sidebar">
  <a href="/">Home</a>
  <a href="/subjects">Subjects</a>
  <a class="active" href="/strands">Strands</a>
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
				@foreach($strands as $strand)
					<tr>
						<td>{{ $strand->id }}</td>
						<td>{{ $strand->name }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/strands/add'>Add Strand</a>
	</br>
@endsection