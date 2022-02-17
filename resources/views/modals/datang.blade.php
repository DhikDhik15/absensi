    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Absen Kehadiran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form name="datang" id="datang" method="POST" action="{{route('absensi.store')}}">
          @csrf
        <div class="modal-body">
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-success" type="submit" name="masuk" value="{{old('masuk')}}">Datang</button>
          </div>
        </div>
        </form>
      </div>
    </div>
