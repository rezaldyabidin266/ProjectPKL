<?php 

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
    <title>Daftar Pelanggan</title>

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
                            <i data-toggle="tooltip" title="Keranjang Belanja" class="fas fa-cart-plus ml-3 mr-3 text-success wow fadeInDown"></i>
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
`               <h4 style="font-family: 'font4';" class="text-center font-weight-bold m-4 mb-5" id="barang" >Daftar Pelanggan</h4>
                            <div class="row">
                               <div class="panel panel-default mx-auto mb-5 mt-2">
                                 <div class="panel-heading">
                                   <h3 class="panel-title">Jangan Sampai lupa sama Akun sendiri!</h3>
                                 </div>
                                 <div class="panel-body">
                               <form action="" method="POST">
                               <div class="form-group">
                                      <label for="exampleFormControlInput1">Nama</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nama"
                                      required>
                                    </div>
                               <div class="form-group">
                                      <label for="exampleFormControlInput1">Email</label>
                                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="email"
                                      required>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlInput1">Password</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Password" name="password"
                                      required>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlInput1">Alamat</label>
                                    <textarea name="alamat" id="" class="form-control" rows="10" required></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlInput1">Telepon/Hp</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Telepon" name="telepon" required>
                                    </div>
                                    <button class="btn btn-dark" name="daftar">Daftar</button>
                               </form>

                               <?php
                                    //jk tombol daftar di klik
                                    if(isset($_POST["daftar"]))
                                    {
                                        //mengambil data
                                        $nama = $_POST["nama"];
                                        $email = $_POST["email"];
                                        $password = $_POST["password"];
                                        $alamat = $_POST["alamat"];
                                        $telepon = $_POST["telepon"];

                                       //cek email validasi
                                       $ambil =$koneksi->query("SELECT * FROM pelanggan
                                       WHERE email_pelanggan='$email'");
                                       $yangcocok = $ambil->num_rows;
                                       if($yangcocok==1)
                                       {
                                           echo "<script>alert('Email telah dipakai');</script>";
                                           echo "<script>location='daftar.php';</script>";
                                       }
                                       else
                                       {
                                           //query insset data
                                           $koneksi->query("INSERT INTO pelanggan
                                           (email_pelanggan,password_pelanggan,nama_pelanggan,
                                            telepon_pelanggan,alamat_pelanggan) VALUES
                                            ('$email','$password','$nama','$telepon','$alamat' )");
                                              echo "<script>alert('Pendaftaran sukses');</script>";
                                              echo "<script>location='order.php';</script>";
                                       }

                                    }
                               ?>


                          
                                 </div>
                               </div>
                          </div>
                      </div>
                  </div>
          

                    
<!-- Modal -->

    





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
                <h1 class="up"><a href="#atas"> <i class="fas fa-chevron-circle-up text-white"></i></a></i></h1>    
              Developed by Rezaldy Abidin Copyright <i class="far fa-copyright mt-3">2019</i>   
          
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


<!--  <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text">First and last name</span>
                                                    </div>
                                                    <input type="text" aria-label="First name" class="form-control">
                                                    <input type="text" aria-label="Last name" class="form-control">
                                                  </div>
                                               </div>
                                  
                                    <div class="form-group">
                                            <label for="exampleFormControlSelect1">Kategory</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                              <option>Styrofom</option>
                                              <option>Keranjang</option>
                                              <option>Ice Cream</option>
                                              <option>Ultra Cool</option>
                                              
                                            </select>
                                          </div>               
                                    <div class="form-group">
                                            <label for="exampleFormControlSelect1">Pengiriman</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                              <option>JNE</option>
                                              <option>PANDU</option>
                                              <option>PAHALA</option>
                                              <option>GOJEK</option>
                                              <option>JNT</option>
                                            </select>
                                          </div>                
                                          <div class="form-group">
                                                <label for="exampleFormControlSelect1">Pembayaran</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                  <option>BCA</option>
                                                  <option>BRI</option>
                                                  <option>BI</option>
                                                  <option>Mandiri</option>
                                                  <option>Indomaret / Alfamart</option>
                                                </select>
                                              </div>                                        
                                    <div class="form-group">
                                      <label for="exampleFormControlTextarea1">Message</label>
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                                    </div>
                      -->
  </body>
</html>

