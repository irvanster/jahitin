@extends('back.master')
@section('title')
Penjahit
@endsection('title')
@section('content')
@include('back.penjahit.add')
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Penjahit</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Penjahit</li>
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
                            <strong>Sukses! </strong>{{ Session::get('success') }}
                        </div>
                    @endif
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddPenjahit"><i class="fa fa-plus"> Tambah Baru</i></button>
                    <div class="table-responsive">
                        <table id="jahitantb" class="table table-hover table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th></th>
                                    <th>Identitas</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Nilai</th>
                                    <th>Jahitan Selesai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lists as $item)
                                    <tr>
                                        <td>{{ $item->nama_penjahit }}</td>
                                        <td><img src="{{ asset('data/foto_penjahit/'. $item->foto_penjahit) }}" alt="foto" width="50"></td>
                                        <td>{{ $item->identitas_penjahit }}</td>
                                        <td>{{ $item->alamat_penjahit }}</td>
                                        <td>{{ $item->email_penjahit }}</td>
                                        <td>{{ $item->telepon_penjahit }}</td>
                                        <td>{{ $item->nilai_penjahit }}</td>
                                        <td>{{ $item->jml_jahit_selesai }}</td>
                                        <td>
                                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            @if($item->status_penjahit < 1)
                                                <form action="{{ route('b.konfirmasi.penjahit', $item->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success" title="Konfirmasi"><i class="fa fa-check"></i></button></a> 
                                                </form> 
                                            @else
                                                <button class="btn btn-info" data-toggle="modal" data-target="#modalEditPenjahit-{{ $item->id_penjahit }}"><i class="fa fa-edit"></i></button>
                                            @endif
                                            
                                        </td>
                                    </tr>
                                    @include('back.penjahit.edit')                                    
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

@endsection('content')