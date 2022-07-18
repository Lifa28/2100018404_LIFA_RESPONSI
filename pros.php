<html>
<head>
<title>Latihan CSS</title>
<style type="text/css">
body{
background: black;
 
}
</style>
</head>
<body>

</body></html>

<?php

$baju = $_POST['baju'];
$harga_baju = $_POST['harga_baju'];
$kebaya = $_POST['kebaya'];
$harga_kebaya= $_POST['harga_kebaya'];
$dress = $_POST['dress'];
$harga_dress = $_POST['harga_dress'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$total = $_POST['baju']*$_POST['harga_baju'] + $_POST['kebaya']*$_POST['harga_kebaya'] + $_POST['dress']*$_POST['harga_dress'];

echo "<head><title>PESANAN LAUNDRY </title></head>";
$fp = fopen("guestbookss.txt", "a+");

fputs($fp, "$baju|$harga_baju|$kebaya|$harga_kebaya|$dress|$harga_dress|$nama|$alamat|$total\n");
fclose($fp);
echo "<br><br>";
echo "<font color='lightblue' size='20'><center>  Terima kasih atas Pesanan anda 😀 . <br> ⬇  YUK Cek pesanan Kamu dibawah ini ⬇ . <br><br></font>";
echo " <center> <a href='look.php' > <font color='white' size='6' >LIHAT PESANAN </font></a><br><br>";
echo " <center> <a href='Pesan.php'> <font color='white' size='3'> MAU LAUNDRY LAGI ? </font></a><br>";
echo "</tabel>";

?>