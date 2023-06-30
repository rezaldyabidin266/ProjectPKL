<?php 

session_start();
include 'koneksi.php';
error_reporting(0);

if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])) 
{
  echo "<script>alert('keranjang kosong, silahkan belanja terlebih dahulu')</script>;";
  echo "<script>location='index.php';</script>;";
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TOKO ONLINE</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="fontawsome/css/all.min.css">
    <link rel="stylesheet" href="wowJs/animate.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      html{
        cursor: pointer;
        scroll-behavior: smooth;
      }

      @font-face{

        font-family: 'font1';
        src: url(font/ANGEL___.ttf);

      }
        @font-face{

        font-family: 'font2';
        src: url(font/Indonesia\ Merdeka.ttf);

      }
        @font-face{

        font-family: 'font3';
        src: url(font/K26ToyBlocks123.ttf);

      }
        @font-face{

        font-family: 'font4';
        src: url(font/Volaroid\ san.otf);

      }
    </style>
  </head>
  <body id="body">
    
    <!--Header-->
 
    <nav style="background: #15161D; border-bottom: 3px solid #D10024;" class="navbar navbar-expand-lg navbar-light fixed-top " >
        <div class="container">


                <h3><i class="fas fa-cart-plus text-success mr-2"></i></h3>
                <a style="font-family: 'font4';"class="navbar-brand font-weight-bold text-white wow bounceInDown" href="#">Brasil Store</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item active">
                    <a class="nav-link text-white geser" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                     <li class="nav-item active">
                    <a class="nav-link text-white" href="keranjang.php">keranjang<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="#contact">Hubungi<span class="sr-only">(current)</span></a>
                      </li>
                 <li class="nav-item active">
                     <a class="nav-link text-white" href="#about">Bantuan <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link text-white" href="admin/login.php">Login Admin <span class="sr-only">(current)</span></a>
                     </li>                            
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="icon mt-2">
                    <h5>
                           <a href="keranjang.php"> <i data-toggle="tooltip" title="Keranjang Belanja" class="fas fa-cart-plus ml-3 mr-3 text-success wow fadeInDown"></i></a>
                            <i data-toggle="tooltip" title="Surat Masuk" class="fas fa-envelope mr-3 text-success wow fadeInDown"></i>
                            <i data-toggle="tooltip" title="Notifikasi" class="fas fa-bell mr-3 text-success wow fadeInDown"></i>
                    </h5>
                </div>
                </div>
        </div>
          </nav>
 
     <!--/Header-->

          <div class="row mt-5 no-gutters" id="atas">

              <!--Dashboard-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-2  bg-light ">
                    <ul class="list-group list-group-flush p-2 pt-4 wow fadeInDown">
                            <li class="list-group-item text-white"  style="background: #15161D;">
                                <i class="fas fa-list mr-1 text-white "></i>KATEGORY PRODUK</li>
                            <li class="list-group-item ">
                                <i class="fas fa-angle-right"></i>
                                <a href="box.php">STYROFOM</a></li>
                            <li class="list-group-item">
                                    <i class="fas fa-angle-right"></i>
                                   <a href="keranjanges.php"> KERANJANG</a></li>
                            <li class="list-group-item">
                                    <i class="fas fa-angle-right"></i>
                                   <a href="es.php"> ES KRIM</a></li>
                            <li class="list-group-item">
                                    <i class="fas fa-angle-right"></i>
                                    <a href="ultra.php">ULTRA COOL</a></li>
                          </ul>


            </div>

           <!--/Dashboard-->


            <!--Content-->

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 mt-2" >

      <?php include 'menu.php'; ?>
            <section class="konten mb-5 mt-2 mr-3 ml-3">
                <div class="container">
                    <h3 class="text-center">Keranjang Belanja</h3>
                    <hr>
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Subharga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $nomor=1;?>
                            <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
                            <!-- Menampilkan Produk -->
                            <?php
                                $ambil = $koneksi->query("SELECT * FROM produk 
                                WHERE id_produk='$id_produk'");
                                $pecah = $ambil->fetch_assoc();
                                $subharga = $pecah["harga_produk"] * $jumlah;
                            ?>
                                <tr>
                                    <td><?php echo $nomor; ?> </td>
                                    <td><?php echo $pecah["nama_produk"]; ?></td>
                                    <td>Rp. <?php echo number_format($pecah["harga_produk"]); ?></td>
                                    <td><?php echo $jumlah; ?></td>
                                    <td>Rp. <?php echo number_format($subharga); ?></td>
                                    <td>
                                      <a href="hapuskeranjang.php?id=<?php echo $id_produk ?>" class="btn btn-danger btn-xs">Hapus</a>
                                    </td>
                                </tr>
                                <?php $nomor++?>
                            <?php endforeach ?>
                            </tbody>
                    </table>
                    <a href="index.php" class="btn btn-primary mr-2 mt-1">Lanjutkan Belanja</a>
                    <a href="checkout.php" class="btn btn-outline-success  mt-1">CheckOut</a>
                </div>
            </section>   
         
                </div>
          
              </div>

  


      <!--/Modal-->
            </div>



              <!--/Content-->

          </div>

      
        <footer style="background: #15161D;" class="text-white p-5 mt-3 " >
                <div class="row">
                    <div class="col-md-3 wow fadeInDown" id="help">
                        <h5>LAYANAN PELANGGAN</h5>
                        <ul>
                            <li>Pusat Bantuan</li>
                            <li>Cara Pembelian</li>
                            <li>Pengiriman</li>
                            <li>Cara Pengembalian</li>
                        </ul>
                    </div>
                    <div class="col-md-3 wow fadeInDown" id="about">
                        <h5>TENTANG KAMI</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolores ipsa temporibus natus modi nesciunt dignissimos? Quos atque tenetur necessitatibus a doloremque! Maxime reiciendis similique consequatur expedita maiores fugit cupiditate!</p>
                    </div>
                    <div class="col-md-3 wow fadeInDown">
                        <h5>MITRA KERJASAMA</h5>
                        <li>GOJEK</li>
                        <li>GRAB</li>
                        <li>JNE</li>
                        <li>PAHALA</li>
                        <li>WAHANA</li>
                        <li>LotteMart</li>
                        <li>Giant</li>
                    </div>
                    <div class="col-md-3 wow fadeInDown" id="contact">
                        <h5>HUBUNGI KAMI</h5>
                        <ul>
                            <li>0281-2339-3713</li>
                            <li>brasil@gmail.com</li>
                            <li><a href="https://www.tokopedia.com/brasil25?source=universe&st=product">Tokopedia</a></li>
                            <li><a href="https://www.lazada.co.id/-i485012860-s599908070.html?spm=a2o7h.10604829.old-navigation.48.7a321e13aIKaB1&urlFlag=true&mp=2">Lazada</a></li>
                            <li><a href="https://www.bukalapak.com/u/devioktaviani86?from=omnisearch&search_source=omnisearch_user&source=navbar">Bukalapak</a></li>
                            <li><a href="https://shopee.co.id/esbrasil">Shope</a></li>
                        </ul>
                    </div>
                </div>
        </footer>

        <div style="background: #15161D;"  class=" copyright text-center text-white font-weight-bold p-2 pb-3 ">
            <p>
                <h1 class="up">
                  <a href="#atas"> 
                    <i class="fas fa-chevron-circle-up text-white"></i>
                  </a>
              </h1>    
              Developed by Rezaldy Abidin Copyright 
              <i class="far fa-copyright mt-3">2019</i>   
          
            </p>
        </div>

     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>

        <script src="wowJs/wow.js"></script>
  <script>

    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };


    var loading = document.getElementById('loading');

    window.addEventListener('load',function(){
    	loading.style.display="none";
    });


  </script>

  </body>
</html>

