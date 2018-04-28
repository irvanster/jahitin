<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
        <form method="POST" action="{{ route('b.store.register') }}">
        @csrf
        @method('post')
        <div class="modal-body">
                <input type="hidden" id="id" name="id">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nama Depan</label>
                        <input type="text" class="form-control {{ $errors->has('nama_depan') ? 'is-invalid' : '' }}" value="{{ old('nama_depan') }}" placeholder="nama depan" name="nama_depan" required>
                        @if($errors->has('nama_depan'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nama_depan') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nama Belakang</label>
                        <input type="text" class="form-control {{ $errors->has('nama_belakang') ? 'is-invalid' : '' }}" value="{{ old('nama_belakang') }}" placeholder="nama belakang" name="nama_belakang" required>
                        @if($errors->has('nama_belakang'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nama_belakang') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Alamat E-Mail</label>
                    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="example@email.com" name="email" required>
                    @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" class="form-control {{ $errors->has('telepon') ? 'is-invalid' : '' }}" value="{{ old('telepon') }}" placeholder="08586412562" name="telepon" required>
                    @if($errors->has('telepon'))
                    <div class="invalid-feedback">
                        {{ $errors->first('telepon') }}
                    </div>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Password</label>
                        <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="*******" name="password" required>
                        @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label>Konfirmasi Password</label>
                        <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="*******" name="password_confirmation" required>
                        @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <select name="level" id="level" class="form-control">
                        <option value="#">Pilih Level</option>
                        <option value="1">Super Admin</option>
                        <option value="2">admin</option>
                    </select>
                </div>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Register</button>
        </div>
    </form>
    </div>
</div>
</div>