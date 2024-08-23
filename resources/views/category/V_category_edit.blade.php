<div class="modal fade" id="modal-edit{{$item->idp_category}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class='d-inline' action="{{ url('category/update/'.$item->idp_category) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="category_name">Kategori</label>
                        <input type="text" name="category_name" id="category_name"
                            class="form-control @error('category_name') is-invalid @enderror"
                            value="{{ $item->category_name }}">
                        @error('category_name')
                        <div class="small text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="order">Urutan</label>
                        <input type="text" name="order" id="order"
                            class="form-control @error('order') is-invalid @enderror" value="{{ $item->order }}">
                        @error('order')
                        <div class="small text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Perbarui</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->