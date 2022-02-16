<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Absensi</title>
    @include('includes.style')    
    @include('layouts.app')
  </head>
  <body>
<div class="container">
  <div class="col-sm-10 mb-3 ">
    <div class="card border-primary">
      <div class="card-body">
        <h5 class="card-title fw-bold">Kehadiran</h5>
        <p class="card-text">Silahkan isi kehadiran anda disini ya.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMasuk">
          Absen Masuk
        </button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPulang">
          Absen Pulang
        </button>
      </div>
    </div>
  </div>

  <div class="col-sm-10 mb-3">
  <div class="card border-primary">
    <div class="card-body">
      <p class="fw-bold">Lokasi Saya</p>
          
    </div>
  </div>
  </div>

<!-- Modal Masuk -->
<div class="modal-dialog modal fade" id="modalMasuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Absen Kehadiran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-success" type="button">Datang</button>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Pulang -->
<div class="modal-dialog modal fade" id="modalPulang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Absen Pulang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-danger" type="button">Pulang</button>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
@include('includes.script')
</body>
</html>
