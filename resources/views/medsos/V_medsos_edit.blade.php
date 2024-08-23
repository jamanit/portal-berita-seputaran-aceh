<div class="modal fade" id="modal-edit{{$item->idp_medsos}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Media Sosial</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class='d-inline' action="{{ url('medsos/update/'. $item->idp_medsos) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="medsos_name">Nama Medsos</label>
                        <select name="medsos_name" id="medsos_name"
                            class="form-control @error('medsos_name') is-invalid @enderror">
                            <option value="">- pilih -</option>
                            <option value="Email" {{ $item->medsos_name == "Email" ? "selected" : ""; }}>Email</option>
                            <option value="Youtube" {{ $item->medsos_name == "Youtube" ? "selected" : ""; }}>Youtube
                            </option>
                            <option value="WhatsApp" {{ $item->medsos_name == "WhatsApp" ? "selected" : ""; }}>WhatsApp
                            </option>
                            <option value="Instagram" {{ $item->medsos_name == "Instagram" ? "selected" : "";
                                }}>Instagram</option>
                            <option value="Facebook" {{ $item->medsos_name == "Facebook" ? "selected" : ""; }}>Facebook
                            </option>
                            <option value="Twitter" {{ $item->medsos_name == "Twitter" ? "selected" : ""; }}>Twitter
                            </option>
                            <option value="No Telepon" {{ $item->medsos_name == "No Telepon" ? "selected" : ""; }}>No
                                Telepon</option>
                        </select>
                        @error('medsos_name')
                        <div class="small text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="medsos_address">Alamat Medsos</label>
                        <input type="text" name="medsos_address" id="medsos_address"
                            class="form-control @error('medsos_address') is-invalid @enderror"
                            value="{{ $item->medsos_address }}">
                        @error('medsos_address')
                        <div class="small text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="medsos_link">Link</label>
                        <input type="text" name="medsos_link" id="medsos_link"
                            class="form-control @error('medsos_link') is-invalid @enderror"
                            value="{{ $item->medsos_link }}">
                        @error('medsos_link')
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