<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Your Order</title>
</head>
<body>
<div class="container">
<h2>Mimin cek pesanan kamu lagi ya....</h2>
    <strong>Pesanan kamu adalah:</strong><br>
    <?php echo $_GET["name"]; ?><br>
    <strong>Dikirim ke:</strong><br>
    <?php echo ($_GET["address"]); ?><br><br>
    <a class="btn btn-success" target="_blank" href="https://wa.me/6285710215088?text=Hai%2C+kak+aku+mau+pesan+<?php echo urlencode($_GET["name"]); ?>+ke+alamat+<?php echo urlencode($_GET["address"]); ?>">Pesan Sekarang!</a>
    <p>Data yang dimasukan salah? Tenang...</p><a class="btn btn-danger" href="/order/index.php">Klik Akoe aja</a>
</div>
</body>
</html>