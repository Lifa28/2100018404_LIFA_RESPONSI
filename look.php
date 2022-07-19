<?php 
$date=date('Y-m-d');

echo "<head><title>Pesanan</title></head>";
$fp =fopen("guestbookss.txt","r");
echo "<center>";
echo "<h1>Table Pesanan</h1>";
echo "<a href='index.html'><b>:: MAU Laundry Lagi ? ::</b></a>";
echo "<hr>";
echo "<table border='1' cellspacing='0' cellpadding='2'";

echo "<tr>  <td width='150px'>tanggal</td>
			<td width='150px'>harga_baju</td>
			<td width='150px'>baju</td>
            <td width='150px'>harga_kebaya</td>
            <td width='150px'>kebaya</td>
            <td width='150px'>harga_dress</td>
            <td width='150px'>dress</td>
            <td width='150px'>nama</td>
            <td width='150px'>alamat</td>
            <td width='150px'>total</td>

        </tr>";

  while ($isi = fgets($fp,80)) {
        $pisah = explode('|', $isi);

echo "<tr>  <td>$date</td>

            <td>$pisah[0]</td>
            <td>$pisah[1]</td>
            <td>$pisah[2]</td>
            <td>$pisah[3]</td>
            <td>$pisah[4]</td>
   					<td>$pisah[5]</td>
   					<td>$pisah[6]</td>
            <td>$pisah[7]</td>
            <td>$pisah[8]</td>			
             </tr>";
  
    }

    echo "</tabel>";
    echo "</center>";

 ?>

 
