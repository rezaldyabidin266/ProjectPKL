<?php
//koneksi DB
session_start();
include 'koneksi.php';

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
                    <a class="nav-link text-white" href="Keranjang.php">Keranjang<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="#contact">Hubungi<span class="sr-only">(current)</span></a>
                      </li>
                 <li class="nav-item active">
                     <a class="nav-link text-white" href="checkout.php">CheckOut<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link text-white" href="admin/login.php">Admin <span class="sr-only">(current)</span></a>
                     </li>                            
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="icon mt-2">
                    <h5>
                          <a href="keranjang.php">  <i data-toggle="tooltip" title="Keranjang Belanja" class="fas fa-cart-plus ml-3 mr-3 text-success wow fadeInDown"></i></a>
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

                  <ul class="mt-3">
                    <li class="font-weight-bold">Catatan :</li>
                    <li><h3>Jangan Lupa Import DataBase yah dulu </h3></li>
                    <li>Baru Index.php doang yang isi barang yah dari DB</li>
                    <li>Halaman CheckOut Blm di buat</li>
                    <li>Blm ada input Pembayaran</li>
                    <li>Akun Admin <br>
                      ID :admin
                      PW :rezaldy266
                    </li>
                    <li>Akun PELANGGAN <br>
                      ID :rezaldy266@gmail.com
                      Pw :laladon03
                    </li>
                  </ul>
            </div>

           <!--/Dashboard-->


            <!--Content-->

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 mt-2" >

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="img/es/nas-mato-jnWGWSWTVqU-unsplash.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/box/chuttersnap-fyaTq-fIlro-unsplash.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/keranjang/tamaki-kato-7croK2-BiVQ-unsplash.jpg" alt="Third slide">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>

                          <div class="container">
`               <h4 class="text-center font-weight-bold m-4" id="barang" >PRODUK TERBARU</h4>

                    <div class="row mx-auto wow fadeInDown" >
                      <?php $ambil = $koneksi->query("SELECT * FROM produk "); ?>
                      <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                            <div class="card card-manual mr-2 ml-2 mt-3 ">
                                    <img class="card-img-top" src="foto_produk/<?php echo $perproduk['foto_produk'];?>" alt="Card image cap">
                                    <div class="card-body bg-light">
                                      <h5 class="card-title"><?php echo $perproduk['nama_produk']; ?></h5>
                                      <p class="card-text"> <?php echo $perproduk['desc_produk']; ?></p>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                        <i class="far fa-star text-warning"></i><br>
                                      <a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary mt-1" 
                                     >Beli</a>
                                      <a href="detail.php?id=<?php echo $perproduk['id_produk'];?> " class="btn btn-danger mt-1">Detail</a>
                                    </div>
                                </div>
                      <?php } ?>
        <!--                         <div class="card card-manual mr-2 ml-2 ">
                                        <img class="card-img-top" src="img/keranjang/9051422_b11faefb-b872-403d-a8ab-17433a67eb00_2048_2048.jpg" alt="Card image cap">
                                        <div class="card-body bg-light">
                                          <h5 class="card-title">Keranjang Es</h5>
                                          <p class="card-text">Ukuran 43 x 21 x 24</p>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star-half-alt text-warning"></i>
                                            <i class="far fa-star text-warning"></i><br>
                                          <a href="#" class="btn btn-primary" data-target="#produk2"
                                          data-toggle="modal">Detail</a>
                                          <a href="#" class="btn btn-danger">Rp. 125.000</a>
                                        </div>
                                    </div>

                                    <div class="card card-manual mr-2 ml-2 " >
                                            <img class="card-img-top" src="img/es/6.jpg" alt="Card image cap">
                                            <div class="card-body bg-light">
                                              <h5 class="card-title">Ice Brasil</h5>
                                              <p class="card-text">Ice Cream Sehat</p>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star-half-alt text-warning"></i>
                                                <i class="far fa-star text-warning"></i><br>
                                              <a href="#" class="btn btn-primary">Detail</a>
                                              <a href="#" class="btn btn-danger">Rp. 75.000</a>
                                            </div>
                                        </div>

                                        <div class="card card-manual mr-2 ml-2 ">
                                                <img class="card-img-top" src="img/ultracool/9051422_b754139a-e7dc-49d8-a1c7-db4a32f0fbea_2048_2048.jpg" alt="Card image cap">
                                                <div class="card-body bg-light">
                                                  <h5 class="card-title">Ice Pack Regular</h5>
                                                  <p class="card-text">Ukuran 700 gr 22 x 9 x 3 Cm</p>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star-half-alt text-warning"></i>
                                                    <i class="far fa-star text-warning"></i><br>
                                                  <a href="#" class="btn btn-primary">Detail</a>
                                                  <a href="#" class="btn btn-danger">Rp. 75.000</a>
                                                </div>
                                            </div>
                    </div>


                    <div class="row mx-auto mt-5 wow fadeInDown">
                        <div class="card mr-2 ml-2 card-manual" >
                                <img class="card-img-top" src="img/box/9051422_7fead262-1cc4-4af0-81ec-b4ab9d19ed0e_2048_2048.jpg" alt="Card image cap">
                                <div class="card-body bg-light">
                                  <h5 class="card-title">Box AG 75 Garuda</h5>
                                  <p class="card-text"> Ukuran 75 x 42 x 32</p>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                    <i class="far fa-star text-warning"></i><br>
                                  <a href="#" class="btn btn-primary" data-target="#produk1"
                                  data-toggle="modal">Detail</a>
                                  <a href="#" class="btn btn-danger">Rp. 75.000</a>
                                </div>
                            </div>

                            <div class="card mr-2 ml-2 card-manual" >
                                    <img class="card-img-top" src="img/keranjang/9051422_b11faefb-b872-403d-a8ab-17433a67eb00_2048_2048.jpg" alt="Card image cap">
                                    <div class="card-body bg-light">
                                      <h5 class="card-title">Keranjang Es</h5>
                                      <p class="card-text">Ukuran 43 x 21 x 24</p>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                        <i class="far fa-star text-warning"></i><br>
                                      <a href="#" class="btn btn-primary">Detail</a>
                                      <a href="#" class="btn btn-danger">Rp. 125.000</a>
                                    </div>
                                </div>

                                <div class="card mr-2 ml-2 card-manual" >
                                        <img class="card-img-top" src="img/es/6.jpg" alt="Card image cap">
                                        <div class="card-body bg-light">
                                          <h5 class="card-title">Ice Brasil</h5>
                                          <p class="card-text">Ice Cream Sehat</p>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star-half-alt text-warning"></i>
                                            <i class="far fa-star text-warning"></i><br>
                                          <a href="#" class="btn btn-primary">Detail</a>
                                          <a href="#" class="btn btn-danger">Rp. 75.000</a>
                                        </div>
                                    </div>

                                    <div class="card mr-2 ml-2 card-manual" >
                                            <img class="card-img-top" src="img/ultracool/9051422_b754139a-e7dc-49d8-a1c7-db4a32f0fbea_2048_2048.jpg" alt="Card image cap">
                                            <div class="card-body bg-light">
                                              <h5 class="card-title">Ice Pack Regular</h5>
                                              <p class="card-text">Ukuran 700 gr 22 x 9 x 3 Cm</p>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star-half-alt text-warning"></i>
                                                <i class="far fa-star text-warning"></i><br>
                                              <a href="#" class="btn btn-primary">Detail</a>
                                              <a href="#" class="btn btn-danger">Rp. 75.000</a>
                                            </div>
                        
                                          </div>
                                                 -->
                </div>
          
              </div>

                    
<!-- Modal -->

<?php $ambil = $koneksi->query("SELECT * FROM produk "); ?>
<?php while($perproduk = $ambil->fetch_assoc()){ ?>
<div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                  <div class="col-md-5">
                    <img src="foto_produk/<?php echo $perproduk['foto_produk'];?>" alt="">
                  </div>
                  <div class="col-md-7">
                    <table class="table table-borderless ">
                        <tr>
                            <th><h3>Deskripsi Produk </h3></th>
                        </tr>
                        <tr>
                            <th>Nama Produk</h5>
                            <td><?php echo $perproduk['nama_produk'];?></td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td><?php echo $perproduk['desc_produk'];?></td>
                            </tr>
                        <tr>
                            <th>Biaya Ongkir</th>
                            <td>Standar</td>
                        </tr>
                        <tr>
                            <th>Ranting Produk</th>
                            <td>  <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                    <i class="far fa-star text-warning"></i></td>
                        </tr>
                        <tr>
                            <th>Berat</th>
                            <td><?php echo $perproduk['berat'];?></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td><?php echo $perproduk['harga_produk'];?></td>
                        </tr>
                    </table>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">KEMBALI</button>
              <button type="button" class="btn btn-primary">BELI</button>
            </div>
          </div>
        </div>
      
      </div>
      <?php } ?>



<!-- 
      <div class="modal fade" id="produk2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                      <img src="img/keranjang/9051422_b11faefb-b872-403d-a8ab-17433a67eb00_2048_2048.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                      <table class="table table-borderless ">
                          <tr>
                              <th><h3>Deskripsi </h3></th>
                          </tr>
                          <tr>
                              <th>Nama Produk</h5>
                              <td>Keranjang Es</td>
                          </tr>
                          <tr>
                              <th>Ukuran</th>
                              <td>43 x 21 x 24 Cm</td>
                              </tr>
                          <tr>
                              <th>Biaya Ongkir</th>
                              <td>Standar</td>
                          </tr>
                          <tr>
                              <th>Ranting Produk</th>
                              <td>  <i class="fas fa-star text-warning"></i>
                                      <i class="fas fa-star text-warning"></i>
                                      <i class="fas fa-star text-warning"></i>
                                      <i class="fas fa-star-half-alt text-warning"></i>
                                      <i class="far fa-star text-warning"></i></td>
                          </tr>
                          <tr>
                              <th>Stock</th>
                              <td>100 PCS</td>
                          </tr>
                          <tr>
                              <th>Harga</th>
                              <td>Rp. 125.000</td>
                          </tr>
                      </table>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">KEMBALI</button>
                <button type="button" class="btn btn-primary">BELI</button>
              </div>
            </div>
          </div>
        </div>      

 -->



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

