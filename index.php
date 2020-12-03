<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>URL Encode Test</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <form class="form-control" action="/order/confirmation.php" method="get">
        <!-- Aku mau pesan: <input name="name" type="text"/><br><br> -->
        Aku mau pesan:
        <select name="name">
            <option selected></option>
            <option value="Pedang">Pedang</option>
            <option value="Kapak">Kapak</option>
        </select><br><br>
        Ke alamat: <input name="address" type="text"/><br><br>
        <input type="submit" value="Submit" onclick="return OnButton1();">
    </form>


<!-- Ini tanpa harus masuk ke halaman konfirmasi tapi masih gagal shit-->
    <!-- <form class="form-control" action="https://wa.me/6285710215088?text=Hai%2C+kak+aku+mau+pesan+<?php echo urlencode($_POST["names"]); ?>+ke+alamat+<?php echo urlencode($_POST['addresss']); ?>" method="POST">
        Aku mau pesan: <input name="names" type="text"/><br><br>
        Ke alamat: <input name="addresss" type="text"/><br><br>
        <input type="submit" value="Submit">
    </form> -->

<!-- Form Versi Javascript tapi belum berhasil karna saya pusink -->
    <!-- <form id="frm1" action="/kuproy_design/finalorder.php">
    First name: <input type="text" name="fname"><br>
    Last name: <input type="text" name="lname"><br><br>
    <input type="button" onclick="myFunction()" value="Submit">
    <script> 
        var val = encodeURI("Hello, Reza"); 
        function myFunction() {
        document.getElementById("frm1").submit();
        }
    </script>
        <input id="myInput" type="text" value="" /> 
        <a href="https://wa.me/6285710215088?text=" onclick="location.href=this.href+val;return false;">Ke Whatsapp</a> 
    </form> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>