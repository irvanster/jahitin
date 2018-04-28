@extends('back.master')
@section('title')
Pesanan - Proses Pengukuran
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
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Sukses! </strong>{{ Session::get('success') }} telah dipindahkan ke <a class="alert-link" href="javascript:void()">Post Ke Penjahit</a>.
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table id="jahitantb" class="table table-hover table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <td>No.</td>
                                    <th>#ID Jahit</th>
                                    <th>ID Costumers</th>
                                    <th>Tanggal pemesanan</th>
                                    <th>Deadline</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1 @endphp
                                @foreach ($lists as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->id_jahit }}</td>
                                        <td>{{ $item->users['id_user'] }}</td>
                                        <td>{{ $item->tanggal_dipesan }}</td>
                                        <td>{{ date( "d-m-Y H:i:s", strtotime( $item->tanggal_dipesan." +5 days" )) }}</td>
                                        <td>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#detailPengukuran-{{ $item->id_jahit }}">Lihat Ukuran</button>
                                            <a href="javascript:void()" title="Lihat Detail"><button class="btn btn-info" data-toggle="modal" data-target="#detailPesanan-{{ $item->id_jahit }}"><i class="fa fa-eye"></i></button></a>
                                            <a href="javascript:void()" title="Batalkan" onclick="return confirm('Beneran?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                        </td>
                                    </tr>
                                    @include('back.pesananJahitan.modalDetailPengukuran')
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