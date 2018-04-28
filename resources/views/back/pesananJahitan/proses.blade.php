@extends('back.master')
@section('title')
Proses Penjahitan
@endsection('title')
@section('content')
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Proses Penjahitan</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Proses Penjahitan</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Sukses! </strong>{{ Session::get('success') }}
                        </div>
                    @endif
                    <h4 class="card-title">Row grouping </h4>
                    <h6 class="card-subtitle">Data table example</h6>
                    <div class="table-responsive">
                        <table id="jahitantb" class="table table-hover table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <td>No.</td>
                                    <th>#ID Jahit</th>
                                    <th>Jumlah Jahit</th>
                                    <th>Total Bayar</th>
                                    <th>Tanggal Dipesan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1 @endphp
                                @foreach ($lists as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->id_jahit }}</td>
                                        <td>{{ $item->jumlah_jahit }}</td>
                                        <td>Rp.{{ number_format($item->total_bayar) }}</td>
                                        <td>{{ $item->tanggal_dipesan }}</td>
                                    <td>
                                        @if($item->status_pembayaran=="0")
                                        <i>
                                            Menunggu Pembayaran.
                                            @if($item->confirm['foto_confir'] !="")
                                            <br>Bukti :                                      
                                            <a href="{{ asset('data/foto_konfirmasi/'. $item->confirm['foto_confir']) }}" target="_blank" style="cursor:zoom-in">
                                                <img src="{{ asset('data/foto_konfirmasi/'. $item->confirm['foto_confir']) }}" style="width:30px" alt="bukti">
                                            </a>
                                        </i><br>
                                            @endif
                                        @endif
                                    </td>
                                        <td>
                                           @if($item->confirm['foto_confir'] !='')
                                           <form style="float:left;margin-right: 5px;" action="{{ route('b.pesananJahitan.konfirmasiBayar', $item->id_jahit) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i></button>
                                           </form> 
                                           @else
                                           <button style="float:left;margin-right: 5px;t" class="btn btn-success disabled" title="Menunggu Pembayaran"><i class="fa fa-check"></i></button>
                                           @endif
                                           <form style="float:left" action="{{ route('b.pesananJahitan.batalkan', $item->id_jahit) }}" method="POST">
                                            @csrf
                                            <button title="Batalkan" onclick="return confirm('Beneran?')" type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                                           </form> 
                                            <a href="javascript:void()" title="Lihat Detail"><button class="btn btn-info" data-toggle="modal" data-target="#detailPesanan-{{ $item->id_jahit }}"><i class="fa fa-eye"></i></button></a>
                                        </td>
                                    </tr>
                                    @include('back.pesananJahitan.modalDetailPesanan')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12" style="margin-top:15px;">
                        @if(count($lists) >= 1)
                        Jumlah semua data {{ $lists->last()->count() }}
                        @endif
                        <div style="float:right">
                            {{ $lists->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
@push('scripts')
<script>

</script>
@endpush
@endsection('content')