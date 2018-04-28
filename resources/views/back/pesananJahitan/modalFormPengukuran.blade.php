<!-- Modal -->
<div class="modal fade" id="formPengukuran" tabindex="-1" role="dialog" aria-labelledby="formPengukuranLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="formPengukuranLabel">Input Data Pengukuran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
        <form method="POST" action="{{ route('b.pesananJahitan.store.pengukuran') }}">
        @csrf
        <div class="modal-body">
            <div class="row">
                <div class="col">
                    <h3>Data Pengukuran Baju</h3>
                    <input type="hidden" name="id_jahit" value="{{ $item->id_jahit }}">
                    <div class="form-group">
                        <label for="l_badan">Lingkar Badan/Dada</label>
                        <div class="input-group">
                            <input id="l_badan" class="form-control" name="l_badan" placeholder="Masukan Lingkar Badan">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="p_lengan">Panjang Lengan</label>
                        <div class="input-group">
                            <input id="p_lengan" class="form-control" name="p_lengan" placeholder="Masukan Panjang Lengan">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="l_kerung">Lingkar Kerung lengan</label>
                        <div class="input-group">
                            <input class="form-control" name="l_kerung" id="l_kerung" placeholder="Masukan Lingkar Kerung Lengan">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="p_bahu">Panjang Bahu</label>
                        <div class="input-group">
                            <input class="form-control" name="p_bahu" id="p_bahu" placeholder="Masukan Panjang Bahu">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="l_pinggang">Lingkar Pinggang</label>
                        <div class="input-group">
                            <input class="form-control" name="l_pinggang" id="l_pinggang" placeholder="Masukan Lingkar Pinggang">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="t_panggul">Tinggi Panggul</label>
                        <div class="input-group">
                            <input class="form-control" name="t_panggul" id="t_panggul" placeholder="Masukan Tinggi Panggul">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="l_panggul">Lebar Panggul</label>
                        <div class="input-group">
                            <input class="form-control" name="l_panggul" id="l_panggul" placeholder="Masukan Lebar Panggul">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="p_sisi">Panjang Sisi</label>
                        <div class="input-group">
                            <input class="form-control" name="p_sisi" id="p_sisi" placeholder="Masukan Panjang Sisi Badan">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="p_punggung">Panjang Punggung</label>
                        <div class="input-group">
                            <input class="form-control" name="p_punggung" id="p_punggung" placeholder="Masukan Panjang Punggung">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="l_punggung">Lebar Punggung</label>
                        <div class="input-group">
                            <input class="form-control" name="l_punggung" id="l_punggung" placeholder="Masukan Lebar Punggung">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="B_lain">Lain - Lain</label>
                        <div class="input-group">
                            <textarea class="form-control" name="b_lain" id="b_lain"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3>Data Pengukuran Celana</h3>                        
                    <div class="form-group">
                        <label for="p_celana">Panjang Celana</label>
                        <div class="input-group">
                            <input id="p_celana" class="form-control" name="p_celana" placeholder="Masukan Panjang Celana">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="l_pinggang2">Lingkar Pinggang</label>
                        <div class="input-group">
                            <input class="form-control" name="l_pinggang2" id="l_pinggang2" placeholder="Masukan Lingkar Pinggang">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="t_panggul2">Tinggi Panggul</label>
                        <div class="input-group">
                            <input class="form-control" name="t_panggul2" id="t_panggul2" placeholder="Masukan Tinggi Panggul">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="l_panggul2">Lebar Panggul</label>
                        <div class="input-group">
                            <input class="form-control" name="l_panggul2" id="l_panggul2" placeholder="Masukan Lebar Panggul">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="t_duduk">Tinggi duduk</label>
                        <div class="input-group">
                            <input class="form-control" name="t_duduk" id="t_duduk" placeholder="Masukan Tinggi Duduk">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="l_pesan">Lingar Pesak</label>
                        <div class="input-group">
                            <input class="form-control" name="l_pesak" id="l_pesak" placeholder="Masukan Lingkar Pesak">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="l_paha">Lingkar Paha</label>
                        <div class="input-group">
                            <input class="form-control" name="l_paha" id="l_paha" placeholder="Masukan Lingkar Paha">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="l_lutut">Lingkar Lutut</label>
                        <div class="input-group">
                            <input class="form-control" name="l_lutut" id="l_lutut" placeholder="Masukan Lingkar Lutut">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="l_tumit">Lingkar Tumit</label>
                        <div class="input-group">
                            <input class="form-control" name="l_tumit" id="l_tumit" placeholder="Masukan Lingkar Tumit">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="c_lain">Lain-lain</label>
                        <div class="input-group">
                            
                            <textarea class="form-control" name="c_lain" id="c_lain" placeholder="Lain - lain "></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
        </div>
    </form>
    </div>
</div>
</div>