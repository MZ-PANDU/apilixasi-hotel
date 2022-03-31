<?php
  include "includes/koneksi.php";
  include "includes/timezone.php";
  $id_kamar   = $_GET['id_kamar'];
  $nama_tamu    = $_GET['nama_tamu']; 
  $email_pemesan   = $_GET['email_pemesan'];
  $checkin= $_GET['cek_in'];
  $checkout= $_GET['cek_out'];
  $jml_kamar= $_GET["jml_kamar"];
  $nama_pemesan= $_GET["nama_pemesan"];
  $hp_pemesan= $_GET["hp_pemesan"];

  $sql = "SELECT no_kamar FROM kamar WHERE id_kamar=$id_kamar";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $no_kamar= $row["no_kamar"];
//   $cek_in= $row["cek_in"];
//   $cek_out= $row["cek_out"];
//   $jml_kamar= $row["jml_kamar"];
//   $nama_pemesan= $row["nama_pemesan"];
//   $email_pemesan= $row["email_pemesan"];
//   $hp_pemesan= $row["hp_pemesan"];
//   $nama_tamu= $row["nama_tamu"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo "ARRIS Hotel Sentraland - ".$nama_tamu; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="hotel.png" />
  <link href="css/bootstrap5.0.1.min.css" rel="stylesheet">
  <link href="css/style_bukti_pesan.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>

<body>
<div class="container" style="margin-top:100px;">
<div class="card text-center">
  <div class="card-header">
    Bukti Reservasi Kamar
  </div>
  <div class="card-body">
    <h5 class="card-title">Bukti Reservasi Kamar</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <ul class="list-group list-group-flush">
    <li class="list-group-item">Tanggal Check In :<?php echo $checkin?></li>
    <li class="list-group-item">Tanggal Check Out :<?php echo $checkout?></li>
    <li class="list-group-item">Jumlah Kamar :<?php echo $jml_kamar?></li>
    <li class="list-group-item">Nama Pemesan :<?php echo $nama_pemesan?></li>
    <li class="list-group-item">Email Pemesan :<?php echo $email_pemesan?></li>
    <li class="list-group-item">HP Pemesan :<?php echo $hp_pemesan?></li>
    <li class="list-group-item">Nama Tamu :<?php echo $nama_tamu?></li>
    <li class="list-group-item">No Kamar :<?php echo $no_kamar?></li>
  </ul>
  </div>
  <div class="card-footer text-muted">
    @HOTEL
  </div>
</div>
</div>

<!-- PANGGIL FILE JAVASCRIPT DARI FOLDER js -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap5.0.1.bundle.min.js"></script>

<script>
    window.print();
</script>

</body>
</html>

