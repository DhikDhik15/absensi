    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Absen Pulang</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form name="pulang" id="pulang" method="POST" action="{{route('pulang.store')}}">
          @csrf
        <div class="modal-body">
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-danger" type="submit" name="pulang" value="{{old('pulang')}}">Pulang</button>
          </div>
        </div>
        </form>
      </div>
    </div>