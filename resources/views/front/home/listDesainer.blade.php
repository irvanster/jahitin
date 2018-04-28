@extends('front.home.master')
@section('title')
List Desainer
@endsection('title')
@section('content')
<div id="timeline" style="dispplay:block">
  <br><br><br><br>
<div class="kontainer">
  <div style="text-align : center">
  <h3>List desainer</h3>
    <div class="card data_post" >
        <img  class="img-fluid" src="{{ asset('uploads/images/desainer.jpg') }}" alt="Card image cap">
        <div class="card-body" style="padding : 3%">
        <h5 class="card-title"><b>Nama desainer</b></h5>
        </div>

        <ul class="list-group list-group-flush">
        <li class="list-group-item">Keahlian : <b>
        Ndesain
            </b></li>
        <li class="list-group-item">Jumlah Jahit terselesaikan : <b> 12 buah</b></li>
        
        <li class="list-group-item">Nilai : <b>
                <style type="text/css">
                .checked{
                    color : orange;
                }
                </style>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                

        </b></li>
        
        </ul>
        <div class="card-body" style="padding :0 20%">
        <a href="#>" class="btn btn-success btn-lg" >Pesan desainer</a>
        
        </div>
    </div>
 
</div>
</div>
@endsection('content')