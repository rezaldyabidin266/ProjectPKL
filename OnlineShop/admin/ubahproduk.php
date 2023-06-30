<h2>Update Produk </h2>
<?php 

    $ambil =$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
    $pecah = $ambil->fetch_assoc();
    
   
?>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Nama Produk</label>
        <input type="text" name="nama" class="form-control" 
        value="<?php echo $pecah['nama_produk']; ?>">
    </div>
    <div class="form-group">
        <label for="">Harga</label>
        <input type="number" name="harga" class="form-control" 
        value="<?php echo $pecah['harga_produk']; ?>">
    </div>
    <div class="form-group">
        <label for="">Berat</label>
        <input type="number" name="berat" class="form-control" 
        value="<?php echo $pecah['berat']; ?>">
    </div>
    <div class="form-group">
       <img src="../foto_produk/<?php echo $pecah['foto_produk'] ?>" width="200px">
    </div>
    <div class="form-group">
        <label for="">Ganti Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Deskripsi</label>
        <textarea name="deskripsi" id="" class="form-control" rows="10">
            <?php echo $pecah['desc_produk']; ?>
        </textarea>
    </div>
    <button class="btn btn-primary" name="ubah">Update</button>
</form>


<?php 

    if(isset($_POST['ubah']))
    {
        $namafoto=$_FILES['foto']['name'];
        $lokasifoto =$_FILES ['foto']['tmp_name'];
        //jika foto dirubah
        if(!empty($lokasifoto))
        {
            move_uploaded_file($lokasifoto, "../foto_produk/$namafoto");
            $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
            harga_produk='$_POST[harga]',
            berat='$_POST[berat]',
            foto_produk='$namafoto',
            desc_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]' ");
        }
        else
        {

            $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
            harga_produk='$_POST[harga]', berat='$_POST[berat]',
            foto_produk='$namafoto',
            desc_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]' ");

        }

        echo "<script>alert('Data produk telah diubah');</script>";
        echo "<script>location='index.php?halaman=produk'</script>";

    }


?>