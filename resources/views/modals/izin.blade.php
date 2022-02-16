<div class="modal fade" id="modalIzin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pengajuan Izin</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" id="add_izin" name="add_izin" action="{{ route('pengajuan.store') }}">
          @csrf
            <div class="mb-3">
            <label for="dateIzin" class="form-label">Tanggal</label>
            <input type="date" name ="tanggal"class="form-control" id="date" aria-describedby="help" value="{{ old('tanggal') }}" required>
            @error('date')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
            <div id="help" class="form-text">Diisi pada saat tanggal izin</div>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Keterangan</label>
            <input type="text" class="form-control" name="alasan" id="description" aria-describedby="desc" value="{{ old('alasan') }}" required>
            @error('description')
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
