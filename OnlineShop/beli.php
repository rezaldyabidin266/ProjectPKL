<?php 

session_start();
//mendapatkan id_produk dari url

$id_produk = $_GET['id'];

//jika sudah adaproduk di keranjang ,maka produk itu jumlahnya di +1
if(isset($_SESSION['keranjang'][$id_produk]))
{
    $_SESSION['keranjang'][$id_produk]+=1;
}
//selain itu (blm ada di keranjang ),maka produk di anggap di beli 1
else
{
    $_SESSION['keranjang'][$id_produk] = 1;
}

//echo "<prev>";
//print_r($_SESSION);
//echo "<prev>";

//larikan ke halaman keranjang

echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";

echo "<script>location='keranjang.php';</script>";
?>