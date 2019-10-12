<form>
	<input vale="{{$teacher->id}}" type="hidden" name="id">
	<select name="advisory_section">
		@foreach($sections as $section)
		<option value="{{$section-id}}">{{$section->name}} </option>
		@endforeach
	</select>
</form>