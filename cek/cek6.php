<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>Check Up</title>
        <link rel="icon" href="fav.png" />
    <style media="screen">
    body{
    margin: 0;
    padding: 0;
    background: url("lg.jpg");
    background-size: cover;
}
        .welcome{
            color: #376b80;
            font-size: 35pt;
            font-weight: 900;
            text-align: center;
        }
        .panel{
            width: 100%;
            max-width: 800px;
            background: #89C4F4;
            position: absolute;
            top:200px;
            left: 100%;
            transform: translate(-50%, -65%);
            padding: 40px 30px;
            box-sizing: border-box;
            border-radius: 2px;
            text-align: center;
            box-shadow: 0 0 4px #376b80;
            font-family: 'Roboto Slab', serif;
        }
        button{
            color: #fff;
            width: 60%;
            padding: 10px;
            border-radius: 20px;
            font-size: 15px;
            margin: 10px 0;
            border: none;
            outline: none;
            cursor: pointer;
        }
        .sign-btn{
            background-color: #d8345f;
            width:50%;
        }
        .log-btn{
            background-color: #7ebdb4;
            width:50%;
        }
    </style>

</head>
<body>
  <br> <br>
    <h4 style="font-family: Raleway, sans-serif; text-align: center;"><b>CHECK KESEHATAN</b></h4><br><br><br><br>
    <div class="col-md-6 col-11">
        <div class="panel">
            <hr>
            <h4 style="font-family: 'Roboto Slab', serif; text-align: left;">6. Apakah Anda memiliki kontak dekat dengan seseorang
            yang bepergian ke luar Negeri dalam 14 hari terakhir yang menjadi sakit (batuk, demam, bersin, atau sakit tenggorokan)?</h4>
            <button type="button" class="sign-btn" onclick="location.href='odp.php';">Ya</button> <br>
            <button type="button" class="log-btn" onclick="location.href='aman.php';">Tidak</button> <br>
        </div>
    </div>
	<script src="js/main.js"></script>
</body>

</html>
