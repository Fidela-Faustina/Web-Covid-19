<?php
include '../config.php';

    if(isset($_POST['simpan']))
    {
        $nama_lengkap = $_POST['nama_lengkap'];
        $umur = $_POST['umur'];
        $alamat = $_POST['alamat'];
        $id_kelamin = $_POST['id_kelamin'];
        $suhu = $_POST['suhu'];
        $tgl_cek = $_POST['tgl_cek'];
    }

        $sql_isi = "INSERT INTO t_pasien (nama_lengkap, umur, alamat, id_kelamin, suhu, tgl_cek)
                        VALUES ('$nama_lengkap', '$umur', '$alamat', '$id_kelamin', '$suhu', '$tgl_cek')";

        $hasil_isi = mysqli_query($koneksi, $sql_isi);

        $count = mysqli_affected_rows($koneksi);

        if($count == 1)
        {
            // header("Location: index.php");
            echo "<h1> Data berhasil diinput !! </h1>";
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
