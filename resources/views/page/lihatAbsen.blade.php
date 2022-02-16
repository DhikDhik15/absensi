
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
        <th scope="col">#</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Absen Masuk</th>
        <th scope="col">Absen Pulang</th>
        <th scope="col">Status Kehadiran</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>2021-12-07</td>
        <td>09:10</td>
        <td>16:69</td>
        <td>Tidak Memenuhi</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>2021-12-08</td>
        <td>09:00</td>
        <td>17:10</td>
        <td>Memenuhi</td>
      </tr>
    </tbody>
  </table>
</div>
@include('includes.script')
</body>
</html>
