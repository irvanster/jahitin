@extends('front.home.master')
@section('title')
Home
@endsection('title')
@section('content')
<div id="timeline" style="dispplay:block">
</br></br></br>
  <div class="container" style="text-align:center">
  <h3>Desain Baru</h3>
  <br>
  </div>
  <div id="view">
      @foreach ($list_desain as $item)
        <div class="card data_post">
          <div class="card-header">
              <div class="media">
                  <div class="media-left">
                    <img src="{{ asset('uploads/images/penjahit.jpg') }}" class="media-object" style="width:60px">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading user_p">{{ $item->id_desainer }} <span class="badges tgl_post">{{strftime("%A, %d %B %Y") . "\n"}} {{ date("h:i a") }}</span></h4>

                  </div>
                </div>
              </div>
          </div>
          <div class="card-body" style="padding : 3%">
            <h4 class="card-title"><b>Judul</b> 
            <span class="card-subtitle mb-2 text-muted">Rp.</span> </h4>
            <p class="card-text">deskripsi</p>
            <div class="img-post">
              <img data-name="product_image" src="{{ asset('uploads/images/desainer.jpg') }}" class="img-fluid el_image">
              
            </div>
          </div>
          <div class="card-footer text-muted">
            <center><a class="btn btn-primary btn-block" style="background:#A865E1; border-color : #A865E1;" 
              href="#">Jahit Ini</a></center>
            
          </div>
        </div>
      @endforeach
      <hr size="5"><br>
    <div>
    <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>End of Post Desain</strong> <br>
      </p>klik <a href="#" Class='btn btn-primary'>Pesan Desain</a> untuk memesan Desainer</p>
  </p>klik <a href="#" Class='btn btn-success'>Pesan Penjahit</a> untuk memesan jasa jahit</p>
    
    </div>
    </div>
  </div>

</div>

@endsection('content')