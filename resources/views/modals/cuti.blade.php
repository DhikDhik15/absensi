<div class="modal fade" id="modalCuti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pengajuan Cuti</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" id="add_cuti" name="add_cuti" action="{{ route('cuti.store') }}">
            @csrf
          <div class="mb-3">
            <label for="dateIzin" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" id="date" aria-describedby="help" name="tanggal1" value="{{old('tanggal1')}}" required>
            @error('tanggal')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            <div id="help" class="form-text">Diisi pada saat tanggal awal cuti</div>
          </div>
          <div class="mb-3">
            <label for="dateIzin" class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" id="date" aria-describedby="help" name="tanggal2" value="{{old('tanggal2')}}" required>
            @error('tanggal')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            <div id="help" class="form-text">Diisi pada saat tanggal akhir cuti</div>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="description" aria-describedby="desc" name="alasan" value="{{old('alasan')}}" required>
            @error('alasan')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            <div id="desc" class="form-text">Diisi keperluan izin</div>
          </div>
          <button type="submit" class="btn btn-primary">Ajukan</button>
        </form>
        </div>
      </div>
    </div>
  </div>
