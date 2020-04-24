<?php
include '../config.php';

    if(isset($_POST['simpan']))
    {
        $nama_lengkap = $_POST['nama_lengkap'];
        $umur = $_POST['umur'];
        $alamat = $_POST['alamat'];
        $kelamin = $_POST['kelamin'];
        $suhu = $_POST['suhu'];
        $tgl_cek = $_POST['tgl_cek'];
        $id_status = $_POST['id_status'];
    }

        $sql_isi = "INSERT INTO t_pasien (nama_lengkap, umur, alamat, kelamin, suhu, tgl_cek, id_status)
                        VALUES ('$nama_lengkap', '$umur', '$alamat', '$kelamin', '$suhu', '$tgl_cek','$id_status')";

        $hasil_isi = mysqli_query($koneksi, $sql_isi);

        $count = mysqli_affected_rows($koneksi);

        if($count == 1)
        {
             header("Location: simpulan.php");
        }
        else{
          echo "<h1> Data Gagal diinput !! </h1>";
          echo "<div class='form'>
              <h3>
                  <br/> Klik untuk <a href='cek.php'> Ulangi </a>
              </h3>
          </div>";
        }
?>
