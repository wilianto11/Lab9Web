<?php
    include("koneksi.php"); 
    //query untuk menampilkan data 
    $sql = 'SELECT * FROM data_barang'; 
    $result = mysqli_query($conn, $sql); 
    ?> 
    <?php require('header.php'); ?>
        <h2>Data Barang</h2>
        <tr><a href="tambah.php?id=?">tambah</a></tr> 
        <div class="main"> 
        <table width='80%' border=1> 
            <tr style="background-color:aquamarine"> 
                <th>Gambar</th> 
                <th>Nama Barang</th> 
                <th>Katagori</th> 
                <th>Harga Jual</th> 
                <th>Harga Beli</th> 
                <th>Stok</th> 
                <th>Aksi</th> 
            </tr> 
        <?php 
        if($result): 
        ?> 
        <?php 
        while($row = mysqli_fetch_array($result)): 
        ?> 
        <tr> 
            <td><img src="gambar/<?= $row['gambar'];?>" alt="<?= $row['nama'];?>"></td> 
            <td><?= $row['nama'];?></td> 
            <td><?= $row['kategori'];?></td> 
            <td><?= $row['harga_beli'];?></td> 
            <td><?= $row['harga_jual'];?></td> 
            <td><?= $row['stok'];?></td> 
            <td>
                <a href="ubah.php?id=<?= $row['id_barang']; ?>">ubah</a>
                <a href="hapus.php?id=<?= $row['id_barang']; ?>">hapus</a
            </td>
        </tr> 
        <?php 
        endwhile; 
        else: 
        ?> 
        <tr> 
            <td colspan="7">Belum ada data</td> 
        </tr> 
        <?php 
        endif; 
        ?> 
        </table> 
        </div>
        <?php require('footer.php'); ?> 