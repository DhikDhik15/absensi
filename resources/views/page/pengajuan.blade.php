<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengajuan</title>
    @include('includes.style')    
    @include('layouts.app')
  </head>
<body>
<div class="container">
  <div class="row">
  <div class="col-sm-5 mb-3">
    <div class="card border-primary">
      <div class="card-body">
        <h5 class="card-title">Izin</h5>
        <p class="card-text">Silahkan ajukan izin anda disini.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalIzin">
          Pengajuan Izin
        </button>
      </div>
    </div>
  </div>
  <!-- Modal Izin -->
  @include('modals.izin')

  <div class="col-sm-5 mb-3">
    <div class="card border-primary">
      <div class="card-body">
        <h5 class="card-title">Keterlambatan</h5>
        <p class="card-text">Silahkan isi keterlambatan anda disini ya.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTerlambat">
          Pengajuan Keterlambatan
        </button>
      </div>
    </div>
  </div>
  <!-- Modal Terlambat -->
  @include ('modals.terlambat')

  <div class="col-sm-10 mb-3">
    <div class="card border-primary">
      <div class="card-body">
        <h5 class="card-title">Cuti</h5>
        <p class="card-text">Silahkan ajukan cuti anda disini.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCuti">
          Pengajuan Cuti
        </button>
      </div>
    </div>
  </div>
  <!-- Modal Cuti -->
  @include ('modals.cuti')
</div>
</div>
      @include('includes.script')
</body>
</html>
