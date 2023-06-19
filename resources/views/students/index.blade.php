<h1>List of all students:</h1>
<br>
Laravel Style
<ul>
	@foreach($all_students as $student)
		<li>
			<a href="{{ route('students.show', ['id' => $student->id] ) }}">
				{{ $student->name }}
			</a>
		</li>
	@endforeach
</ul>