@extends('back.master')
@section('title')
Pesanan Dibatalkan
@endsection('title')
@section('content')
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Pesanan Jahitan</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Pesanan Jahitan</li>
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
                                    <th>Tanggal Pesan</th>
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
                                        @if($item->status_pembayaran==10)
                                            <i>Pesanan telah dibatalkan.</i>
                                        @endif
                                    </td>
                                        <td>
                                            <a href="javascript:void()" title="Lihat Detail"><button style="float:left;margin-right:5px;" class="btn btn-info" data-toggle="modal" data-target="#detailPesanan-{{ $item->id_jahit }}"><i class="fa fa-eye"></i></button></a>
                                            @if(Auth::user()->level==1)
                                                <form style="float:left" action="{{ route('b.pesananJahitan.hapus', $item->id_jahit) }}" method="POST">
                                                    @csrf
                                                    <button title="Hapus Permanen" onclick="return confirm('Beneran?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                            @endif
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