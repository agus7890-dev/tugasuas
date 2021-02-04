<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_mhs");

    if(mysqli_connect_error($koneksi))
    {
        echo "koneksi Gagal ". mysqli_connect_error();
    }
?>    