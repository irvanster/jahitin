<!-- Modal -->
<div class="modal fade" id="detailPengukuran-{{ $item->id_jahit }}" tabindex="-1" role="dialog" aria-labelledby="detailPengukuran-{{ $item->id_jahit }}L abel" aria-hidden="true">
    <div class="modal-dialog @if($item->dataukurc!="") modal-lg @endif" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="detailPengukuranLabel">Pesanan <b>#{{ $item->id_jahit }}</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col">
                    <h3>Data Pengukuran Baju</h3>
                    <div class="form-group">
                        <label for="l_badan">Lingkar Badan/Dada</label>
                        <div class="input-group">
                            <input id="l_badan" class="form-control" name="l_badan" value="{{ $item->dataukurb['l_badan'] }}" placeholder="Masukan Lingkar Badan" readonly>
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="p_lengan">Panjang Lengan</label>
                        <div class="input-group">
                            <input id="p_lengan" class="form-control" name="p_lengan" value="{{ $item->dataukurb['p_lengan'] }}" placeholder="Masukan Panjang Lengan" readonly>
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="l_kerung">Lingkar Kerung lengan</label>
                        <div class="input-group">
                            <input class="form-control" name="l_kerung" id="l_kerung" value="{{ $item->dataukurb['l_kerung'] }}" placeholder="Masukan Lingkar Kerung Lengan" readonly>
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="p_bahu">Panjang Bahu</label>
                        <div class="input-group">
                            <input class="form-control" name="p_bahu" id="p_bahu" value="{{ $item->dataukurb['p_bahu'] }}" placeholder="Masukan Panjang Bahu" readonly>
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="l_pinggang">Lingkar Pinggang</label>
                        <div class="input-group">
                            <input class="form-control" name="l_pinggang" id="l_pinggang" value="{{ $item->dataukurb['l_pinggang'] }}" placeholder="Masukan Lingkar Pinggang" readonly>
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="t_panggul">Tinggi Panggul</label>
                        <div class="input-group">
                            <input class="form-control" name="t_panggul" id="t_panggul" value="{{ $item->dataukurb['t_panggul'] }}" placeholder="Masukan Tinggi Panggul" readonly>
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="l_panggul">Lebar Panggul</label>
                        <div class="input-group">
                            <input class="form-control" name="l_panggul" id="l_panggul" value="{{ $item->dataukurb['l_panggul'] }}" placeholder="Masukan Lebar Panggul" readonly>
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="p_sisi">Panjang Sisi</label>
                        <div class="input-group">
                            <input class="form-control" name="p_sisi" id="p_sisi" value="{{ $item->dataukurb['p_sisi'] }}" placeholder="Masukan Panjang Sisi Badan" readonly>
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="p_punggung">Panjang Punggung</label>
                        <div class="input-group">
                            <input class="form-control" name="p_punggung" id="p_punggung" value="{{ $item->dataukurb['p_punggung'] }}" placeholder="Masukan Panjang Punggung" readonly>
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="l_punggung">Lebar Punggung</label>
                        <div class="input-group">
                            <input class="form-control" name="l_punggung" id="l_punggung" value="{{ $item->dataukurb['l_punggung'] }}" placeholder="Masukan Lebar Punggung" readonly>
                            <span class="input-group-addon">cm</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="B_lain">Lain - Lain</label>
                        <div class="input-group">
                            <textarea class="form-control" name="b_lain" id="b_lain" readonly>{{ $item->dataukurb['lain_lain'] }}</textarea>
                        </div>
                    </div>
                </div>
                @if($item->dataukurc['p_celana']!="")
                    <div class="col">
                        <h3>Data Pengukuran Celana</h3>                        
                        <div class="form-group">
                            <label for="p_celana">Panjang Celana</label>
                            <div class="input-group">
                                <input id="p_celana" class="form-control" name="p_celana" value="{{ $item->dataukurc['p_celana'] }}" placeholder="Masukan Panjang Celana" readonly>
                                <span class="input-group-addon">cm</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="l_pinggang2">Lingkar Pinggang</label>
                            <div class="input-group">
                                <input class="form-control" name="l_pinggang2" id="l_pinggang2" value="{{ $item->dataukurc['l_pinggang2'] }}" placeholder="Masukan Lingkar Pinggang" readonly>
                                <span class="input-group-addon">cm</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="t_panggul2">Tinggi Panggul</label>
                            <div class="input-group">
                                <input class="form-control" name="t_panggul2" id="t_panggul2" value="{{ $item->dataukurc['t_panggul2'] }}" placeholder="Masukan Tinggi Panggul" readonly>
                                <span class="input-group-addon">cm</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="l_panggul2">Lebar Panggul</label>
                            <div class="input-group">
                                <input class="form-control" name="l_panggul2" id="l_panggul2" value="{{ $item->dataukurc['l_panggul2'] }}" placeholder="Masukan Lebar Panggul" readonly>
                                <span class="input-group-addon">cm</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="t_duduk">Tinggi duduk</label>
                            <div class="input-group">
                                <input class="form-control" name="t_duduk" id="t_duduk" value="{{ $item->dataukurc['t_duduk'] }}" placeholder="Masukan Tinggi Duduk" readonly>
                                <span class="input-group-addon">cm</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="l_pesan">Lingar Pesak</label>
                            <div class="input-group">
                                <input class="form-control" name="l_pesak" id="l_pesak" value="{{ $item->dataukurc['l_pesak'] }}" placeholder="Masukan Lingkar Pesak" readonly>
                                <span class="input-group-addon">cm</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="l_paha">Lingkar Paha</label>
                            <div class="input-group">
                                <input class="form-control" name="l_paha" id="l_paha" value="{{ $item->dataukurc['l_paha'] }}" placeholder="Masukan Lingkar Paha" readonly>
                                <span class="input-group-addon">cm</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="l_lutut">Lingkar Lutut</label>
                            <div class="input-group">
                                <input class="form-control" name="l_lutut" id="l_lutut" value="{{ $item->dataukurc['l_lutut'] }}" placeholder="Masukan Lingkar Lutut" readonly>
                                <span class="input-group-addon">cm</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="l_tumit">Lingkar Tumit</label>
                            <div class="input-group">
                                <input class="form-control" name="l_tumit" id="l_tumit" value="{{ $item->dataukurc['l_tumit'] }}" placeholder="Masukan Lingkar Tumit" readonly>
                                <span class="input-group-addon">cm</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c_lain">Lain-lain</label>
                            <div class="input-group">
                                
                                <textarea class="form-control" name="c_lain" id="c_lain" value="{{ $item->dataukurc['lain_lain'] }}" placeholder="Lain - lain " readonly></textarea>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success"><i class="fa fa-print"></i> Cetak</button>
        </div>
        </div>
    </div>
</div>