<h2>TAMBAH PRODUK</h2>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label for="">Harga (Rp)</label>
        <input type="number" class="form-control" name="harga">
    </div>
    <div class="form-group">
        <label for="">Berat (Gr)</label>
        <input type="number" class="form-control" name="berat">
    </div>
    <div class="form-group">
        <label for="">Desckripsi</label>
        <textarea name="deskripsi" class="form-control"  rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="">Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php 

    if(isset($_POST['save']))
    {
        $nama = $_FILES['foto']['name'];
        $lokasi = $_FILES['foto']['tmp_name'];
        move_uploaded_file($lokasi,"../foto_produk/".$nama);
        $koneksi->query("INSERT INTO produk
            (nama_produk,harga_produk,berat,foto_produk,desc_produk)
            VALUES('$_POST[nama]','$_POST[harga]','$_POST[berat]','$nama','$_POST[deskripsi]')");

            echo "<div class='alert alert-info'>Data tersimpan</div>";
           echo  "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
    }
?>

