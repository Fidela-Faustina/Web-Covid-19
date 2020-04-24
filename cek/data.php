
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Check</title>
            <link rel="icon" href="fav.png" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
    .container {
      color: white;
    }
    .card{
      margin: 50px;
      background-color: #89C4F4;
      transform: translate(20%, 0);
    }
    </style>


  </head>
  <body background="lg.jpg">
    <div class="container">
      <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2 align="center">Isi Data Pasien</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="isi.php">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number" name="umur" class="form-control" id="umur" placeholder="Umur">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="kelamin">Jenis Kelamin</label>
                            <input type="text" name="kelamin" class="form-control" id="kelamin" placeholder="Perempuan/Laki-Laki">
                        </div>
                        <div class="form-group">
                            <label for="suhu">Suhu Badan</label>
                            <input type="text" name="suhu" class="form-control" id="suhu" placeholder="Suhu Badan">
                        </div>
                        <div class="form-group">
                            <label for="tgl_cek">Tanggal Cek</label>
                            <input type="date" name="tgl_cek" class="form-control" id="tgl_cek" placeholder="Tanggal Sekarang">
                        </div>
                        <div class="form-group">
                            <label for="id_status">Jenis Kelamin</label>
                            <input type="text" name="id_status" class="form-control" id="id_status" placeholder="Aman/ODP">
                        </div>
                        <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
