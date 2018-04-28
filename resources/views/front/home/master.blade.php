 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') - Jahit.In | Digital taylor & Designer</title>

<link rel="stylesheet" href="{{ asset('tm_user/css/master.css') }} ">
<link rel="stylesheet" href="{{ asset('tm_user/css/style.css') }} ">
<link rel="stylesheet" href="{{ asset('tm_user/css/bootstrap.min.css') }} ">
<link rel="stylesheet" href="{{ asset('tm_user/css/w3.css') }} ">
<link rel="stylesheet" href="{{ asset('tm_user/css/sweetalert2.min.css') }} ">
<link rel="stylesheet" href="{{ asset('tm_user/css/global.css') }} ">
    <!-- Bootstrap core CSS -->
 <style type="text/css">

 </style>   

</head>
<body>

    <div class="header w3-steal">
        <div class="table-responsive meno">
          <table width="100%">
            <tr>
              <td width="10%" ><h1 class="logo" onclick="openLeftMenu()"><a href="#"><i class="fas fa-bars"></i></a></td>
              <td width=""  align="center"><a href="#"><h1 class="logo grs" >Jahit.In</h1></a></td>
              <td><a href="#" id="cari" onclick="topFunction()"><h1 class="logo" ><i class="fas fa-search"></i></h1></a> </td>
              <td width="10%" align="center" onclick="topFunction()"><a id="lacak" href="#">
                <h1 class="logo" data-toggle="tooltip" data-placement="bottom" title="Lacak Jahitanmu disini ya sis"><i class="fas fa-truck"></i></h1></a></td>
              <td width="10%" align="center"> 
              </td>
               <td width="10%" align="right" style="padding-right:10px"><h1 class="logo" onclick="openRightMenu()"><i class="fas fa-user"></i></h1></td>
            </tr>
          </table>
        </div>
            
      </div>
  

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Menus &times;</button>
  <a id="daftar" class="w3-bar-item w3-button" href="#">List Penjahit</a>
  <a id="daftar" class="w3-bar-item w3-button" href="#">List Desainer</a>
  <a id="daftar" class="w3-bar-item w3-button" href="#">Promo</a>
  <span class="span_mn">About</span><a href="#" class="w3-bar-item w3-button ">Metode Pembayaran</a>
  
  <a  href="#" class="w3-bar-item w3-button " >Tentang Kami </a>
  <a href="#" class="w3-bar-item w3-button " >Syarat dan Layanan</a>
</div>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;" id="rightMenu">
  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">User Menu &times;</button>
    <a href="#" class="w3-bar-item w3-button">Jahitanku</a>
    <a href="#" class="w3-bar-item w3-button">Cek Tagihanku</a>
    
    <a class="w3-bar-item w3-button" href="{{ route('logout') }}" 
    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
    {{ __('Logout') }}</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
</div>

<div class="container">
    <div id="searchbar" style="display : none; position fixed"  class="konten">  
      <br><br><br>
      
       <form class="form-inline my-2 my-lg-0" action="#" method="POST">
        
         <div class="form-control mx-sm-3 mb-2">
          <input class="form-control mr-sm-2" type="text" name="kunci" id="kunci" placeholder="cari berdasarkan kode atau nama desain">
        </div>
          
          <button type="submit" name="cari" id="cari" class="btn my-2 my-sm-0" ><i class="fas fa-search"></i> Cari </button>
        
      </form> 
    </div>
    <div id="searchbar2" style="display : none; position fixed"  class="konten">
      <br><br><br>
      <form class="form-inline my-2 my-lg-0" action="#" method="POST">
      
       <div class="form-control mx-sm-3 mb-2">
        <input class="form-control mr-sm-2" type="text" name="idjahit" id="idjahit" placeholder="Masukan ID Jahit Anda">
      </div>
        
        <button type="submit" name="btn" id="btn" class="btn my-2 my-sm-0" ><i class="fas fa-search"></i> Lacak </button>
      
      </form>
    </div>
  <div class="konten">
    @yield('content')    
  </div>
</div>

<!-- modal -->
 
  
</div>


      <script type="text/javascript" src="{{ asset('tm_user/js/jquery-3.3.1.min.js') }} "></script>
      <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
      <script src="{{ asset('tm_user/js/bootstrap.min.js') }} "></script>
      <script src="{{ asset('tm_user/js/jquery.smartCart.js') }} "></script>
      <script type="text/javascript" src="{{ asset('tm_user/js/sweetalert2.min.js') }} "></script>
      <script type="text/javascript" src="{{ asset('tm_user/js/popper.min.js') }} "></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script> 
      <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>    
<script>

$("#jahit").smartCart();
function openLeftMenu() {
    document.getElementById("leftMenu").style.display = "block";
}
function closeLeftMenu() {
    document.getElementById("leftMenu").style.display = "none";
}

function openRightMenu() {
    document.getElementById("rightMenu").style.display = "block";
}
function closeRightMenu() {
    document.getElementById("rightMenu").style.display = "none";
}
function Lanjut() {
          document.getElementById("tambahAlamat").style.display = "block";
          document.getElementById("detailJahitan").style.display = "none";
      }

$(function(){
  var $searchlink = $('#cari');
  var $searchbar  = $('#searchbar');
  var $searchlink2 = $('#lacak');
  var $searchbar2  = $('#searchbar2');


  $('#cari').on('click', function(e){
    e.preventDefault();
    
    if($(this).attr('id') == 'cari') {
      if(!$searchbar.is(":visible")) { 
        // if invisible we switch the icon to appear collapsable
        $searchlink.removeClass('fa-search').addClass('fa-search-minus');
      } else {
        // if visible we switch the icon to appear as a toggle
        $searchlink.removeClass('fa-search-minus').addClass('fa-search');
      }
      
      $searchbar.slideToggle(300, function(){
        // callback after search bar animation
      });
    }
  });

  $('#lacak').on('click', function(e){
    e.preventDefault();
    
    if($(this).attr('id') == 'lacak') {
      if(!$searchbar2.is(":visible")) { 
        // if invisible we switch the icon to appear collapsable
        $searchlink2.removeClass('fa-search').addClass('fa-search-minus');
      } else {
        // if visible we switch the icon to appear as a toggle
        $searchlink2.removeClass('fa-search-minus').addClass('fa-search');
      }
      
      $searchbar2.slideToggle(300, function(){
        // callback after search bar animation
      });
    }
  });
  
  $('#searchform').submit(function(e){
    e.preventDefault(); // stop form submission
  });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah2')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah3')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
 $('#myModal').modal('show');


</script>



</body>

</html>
