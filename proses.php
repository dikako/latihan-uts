<?php
    include "koneksi.php";
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];
    $query = mysqli_query($koneksi, "insert into produk(nama_produk, harga, satuan) values('$nama_produk', '$harga', '$satuan')");
    if($query) {
        $tampil_data=mysqli_query($koneksi,"select * from produk");
        $c=0; 
        ?>

        <table border="1">
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Satuan</th>
            </tr> 
        <?php
            while($row=mysqli_fetch_array($tampil_data)){
        ?>

<tr>
        <td><?php echo $row['kdproduk']?></td>
        <td><?php echo $row['nama_produk'];?></td>
        <td><?php echo $row['harga'];?></td>
        <td><?php echo $row['satuan'];?></td>
        <td>
    </td>
    <?php
    }
    ?>
</table><br/>
<a href="form.php">Input data form</a> 
<?php
        
    } else {
        echo "Gagal input data";
        echo mysql_error();
    }
?>