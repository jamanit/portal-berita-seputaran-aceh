<div class="modal fade" id="modal-delete{{$item->idp_news}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Yakin ingin hapus data?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Pilih "Hapus" dibawah ini jika Anda ingin menghapus data.</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                <form class='d-inline' action="{{ url('news/destroy/'.$item->idp_news) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="photo" id="photo" value="{{ $item->photo }}">
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->