<!-- Modal -->
<div class="modal fade" id="modalEditDesainer-{{ $item->id_desainer }}" tabindex="-1" role="dialog" aria-labelledby="modalEditDesainerLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="modalEditDesainerLabel">Edit <b>#{{ $item->id_desainer }}</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
        <form method="POST" action="{{ route('b.update.desainer', $item->id_desainer) }}" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="modal-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <img src="{{ asset('data/foto_desainer/'.$item->foto_desainer) }}" alt="preview img"
            class="col col-md-12 col-sm-12 col-xs-12 col-sm-12 col-xs-12 preview-edit" style="margin-bottom:5px;">
            <input type="file" class="form-control" onchange="$('.preview-edit').attr('src', window.URL.createObjectURL(this.files[0]))" name="foto_desainer">
            <br>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control {{ $errors->has('nama_desainer') ? 'is-invalid' : '' }}" value="{{ $item->nama_desainer }}" placeholder="nama lengkap" name="nama_desainer" required>
                @if($errors->has('nama_desainer'))
                <div class="invalid-feedback">
                    {{ $errors->first('nama_desainer') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Identitas</label>
                <input type="text" class="form-control {{ $errors->has('identitas_desainer') ? 'is-invalid' : '' }}" value="{{ $item->identitas_desainer }}" placeholder="nik" name="identitas_desainer" required>
                @if($errors->has('identitas_desainer'))
                <div class="invalid-feedback">
                    {{ $errors->first('identitas_desainer') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Alamat E-Mail</label>
                <input type="email" class="form-control {{ $errors->has('email_desainer') ? 'is-invalid' : '' }}" value="{{ $item->email_desainer }}" placeholder="example@email.com" name="email_desainer" required>
                @if($errors->has('email_desainer'))
                <div class="invalid-feedback">
                    {{ $errors->first('email_desainer') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" class="form-control {{ $errors->has('telepon_desainer') ? 'is-invalid' : '' }}" value="{{ $item->telepon_desainer }}" placeholder="08586412562" name="telepon_desainer" required>
                @if($errors->has('telepon_desainer'))
                <div class="invalid-feedback">
                    {{ $errors->first('telepon_desainer') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control {{ $errors->has('alamat_desainer') ? 'is-invalid' : '' }}" 
                placeholder="Alamat lengkap desainer" name="alamat_desainer" required>{{ $item->alamat_desainer }}</textarea>
                @if($errors->has('alamat_desainer'))
                <div class="invalid-feedback">
                    {{ $errors->first('alamat_desainer') }}
                </div>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Ganti Password</label>
                    <input type="password" class="form-control {{ $errors->has('password_desainer') ? 'is-invalid' : '' }}" placeholder="*******" name="password_desainer">
                    @if($errors->has('password_desainer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password_desainer') }}
                    </div>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label>Konfirmasi Password</label>
                    <input type="password" class="form-control {{ $errors->has('password_desainer') ? 'is-invalid' : '' }}" placeholder="*******" name="password_desainer_confirmation">
                    @if($errors->has('password_desainer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password_desainer') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
        </div>
    </form>
    </div>
</div>
</div>