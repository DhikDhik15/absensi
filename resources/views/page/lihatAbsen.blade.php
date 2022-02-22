<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.app')
    @include('includes.style')
    <title>Lihat Absen</title>
</head>
<body>
  <div class="container">
  <table class="table table-striped table-hover">
    <thead>
      <tr class="fw-bold">
        <th scope="col">Nama</th>
        <th scope="col">Tanggal</th>
        {{-- <th scope="col">Absen Masuk</th>
        <th scope="col">Absen Pulang</th>
        <th scope="col">Status Kehadiran</th> --}}
      </tr>
    </thead>
    <tbody>
      @forelse ($ListAbsen as $absen)
      <tr>
        <td>{{ $absen->name }}</td>
        <td>{{ $absen->created_at }}</td>
        {{-- <td>09:10</td>
        <td>16:69</td>
        <td>Tidak Memenuhi</td> --}}
      </tr> 
      @empty
      <tr>
        <td class="text-center text-mute" colspan="5">Data Kosong</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
<script>
  $(document).ready(function () {
    $('#ListAbsen').DataTable();
  });
</script>
@include('includes.script')
</body>
</html>