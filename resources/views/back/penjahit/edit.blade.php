<!-- Modal -->
<div class="modal fade" id="modalEditPenjahit-{{ $item->id_penjahit }}" tabindex="-1" role="dialog" aria-labelledby="modalEditPenjahitLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="modalEditPenjahitLabel">Edit <b>#{{ $item->id_penjahit }}</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
        <form method="POST" action="{{ route('b.update.penjahit', $item->id_penjahit) }}" enctype="multipart/form-data">
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
            <img src="{{ asset('data/foto_penjahit/'.$item->foto_penjahit) }}" alt="preview img"
            class="col col-md-12 col-sm-12 col-xs-12 col-sm-12 col-xs-12 preview-edit" style="margin-bottom:5px;">
            <input type="file" class="form-control" onchange="$('.preview-edit').attr('src', window.URL.createObjectURL(this.files[0]))" name="foto_penjahit">
            <br>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control {{ $errors->has('nama_penjahit') ? 'is-invalid' : '' }}" value="{{ $item->nama_penjahit }}" placeholder="nama lengkap" name="nama_penjahit" required>
                @if($errors->has('nama_penjahit'))
                <div class="invalid-feedback">
                    {{ $errors->first('nama_penjahit') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Identitas</label>
                <input type="text" class="form-control {{ $errors->has('identitas_penjahit') ? 'is-invalid' : '' }}" value="{{ $item->identitas_penjahit }}" placeholder="nik" name="identitas_penjahit" required>
                @if($errors->has('identitas_penjahit'))
                <div class="invalid-feedback">
                    {{ $errors->first('identitas_penjahit') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Alamat E-Mail</label>
                <input type="email" class="form-control {{ $errors->has('email_penjahit') ? 'is-invalid' : '' }}" value="{{ $item->email_penjahit }}" placeholder="example@email.com" name="email_penjahit" required>
                @if($errors->has('email_penjahit'))
                <div class="invalid-feedback">
                    {{ $errors->first('email_penjahit') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" class="form-control {{ $errors->has('telepon_penjahit') ? 'is-invalid' : '' }}" value="{{ $item->telepon_penjahit }}" placeholder="08586412562" name="telepon_penjahit" required>
                @if($errors->has('telepon_penjahit'))
                <div class="invalid-feedback">
                    {{ $errors->first('telepon_penjahit') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control {{ $errors->has('alamat_penjahit') ? 'is-invalid' : '' }}" 
                placeholder="Alamat lengkap penjahit" name="alamat_penjahit" required>{{ $item->alamat_penjahit }}</textarea>
                @if($errors->has('alamat_penjahit'))
                <div class="invalid-feedback">
                    {{ $errors->first('alamat_penjahit') }}
                </div>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Ganti Password</label>
                    <input type="password" class="form-control {{ $errors->has('password_penjahit') ? 'is-invalid' : '' }}" placeholder="*******" name="password_penjahit">
                    @if($errors->has('password_penjahit'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password_penjahit') }}
                    </div>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label>Konfirmasi Password</label>
                    <input type="password" class="form-control {{ $errors->has('password_penjahit') ? 'is-invalid' : '' }}" placeholder="*******" name="password_penjahit_confirmation">
                    @if($errors->has('password_penjahit'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password_penjahit') }}
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