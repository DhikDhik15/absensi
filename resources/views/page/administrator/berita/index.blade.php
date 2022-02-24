<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Laravel 8 CRUD</title>
    @include('includes.style')
</head>
<body>
    @include('includes.jquery')
    @include('includes.datatable')
<div class="container mt-4">
	<div class="d-flex justify-content-end">
        <a href="{{ route('student.create') }}" class="btn btn-success mb-2">Add Student</a>
	</div>
	<div class="mt-3">
			@if (session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif
			
			@if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif
		 <table class="table table-hover" id="users-list">
		   <thead>
			  <tr>
				 <th>Student Id</th>
				 <th>Name</th>
				 <th>Gender</th>
				 <th>Age</th>
				 <th>Action</th>
			  </tr>
		   </thead>
		   <tbody>
			 @forelse ($students as $student)
			  <tr>
				 <td>{{ $student->id }}</td>
				 <td>{{ $student->name }}</td>
				 <td>{{ $student->gender }}</td>
				 <td>{{ $student->age }}</td>
				 <td>
					<form onsubmit="return confirm('Apakah Anda Yakin ?');"
						action="{{ route('student.destroy', $student->id) }}" method="POST">
						<a href="{{ route('student.edit', $student->id) }}"
							class="btn btn-sm btn-primary">EDIT</a>
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
					</form>
				  </td>
			  </tr>
			  @empty
				<tr>
					<td class="text-center text-mute" colspan="5">Data Kosong</td>
				</tr>
			 @endforelse
		   </tbody>
		 </table>
	  </div>
</div>
<script>
    $(document).ready( function () {
      $('#students-list').DataTable();
  } );
</script>
</body>
</html>