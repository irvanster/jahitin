<!-- Modal -->
<div class="modal fade" id="detailPesanan-{{ $item->id_jahit }}" tabindex="-1" role="dialog" aria-labelledby="detailPesanan-{{ $item->id_jahit }}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="detailPesananLabel">Pesanan <b>#{{ $item->id_jahit }}</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div id="invoice" class="effect2 ">
                    <div id="invoice-top" style="float:left;width:100%;">
                        <!--End Info-->
                        <div class="title">
                            <h4>Detail <b>#{{ $item->id_jahit }}</b></h4>
                            <p>Tanggal Pesan: {{ $item->tanggal_dipesan }}
                            </p>
                        </div>
                        <!--End Title-->
                        <div class="clientlogo"></div>
                        <div class="invoice-info">
                            <h2>{{ $item->users['nama_user'] }}</h2>
                            <p> {{ $item->users['email_user'] }}<br> {{ $item->users['telepon_user'] }}
                            </p>
                        </div>
                    </div>
                    <!--End InvoiceTop-->

                    <div id="invoice-mid" style="float:left;width:100%;">
                        <div class="col col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('data/foto_desain/'.$item->postdesain['gambar_post']) }}" 
                                    alt="desain" style="width:100%;float:left;">
                                </div>
                                <div class="col-md-7">
                                    <p class="col">
                                        Nama : {{ $item->postdesain['judul_post'] }}<br>
                                        Harga : Rp.{{ number_format($item->postdesain['harga_post']) }}<br>
                                        Deskripsi : {{ str_limit($item->postdesain['deskripsi_post'], 255) }}<br>
                                        Bahan/Material Desain : {{ $item->postdesain['bahan_desain'] }}<br>
                                        Jumlah Jahit : {{ $item->jumlah_jahit }}<br>
                                        Total Pembayaran : Rp.{{ number_format($item->total_bayar) }}<br>
                                        @if($item->confirm['foto_confir'] !="")
                                        Foto Bukti Pembayaran :
                                            <a style="cursor:zoom-in" target="_blank" href="{{ asset('data/foto_konfirmasi/'. $item->confirm['foto_confir']) }}">
                                                <img src="{{ asset('data/foto_konfirmasi/'. $item->confirm['foto_confir']) }}" style="max-width:50px" alt="bukti">
                                            </a>
                                        @endif
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!--End Invoice Mid-->
                </div>
                <!--End Invoice-->
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>