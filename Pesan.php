<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.container{
			width:800px;
			height: 500px;
			margin: auto;
			border: 1px dotted #blue;
			padding: 10px;
			background-image:url(mesin.jpg);
			color:black;
		}

		h2{
			text-align: center;
			text-decoration: underline;


		}

		table{
			background: whitesmoke;
			margin:auto;

		}

		td{
			padding: 10px
		}
	</style>
</head>

<body>
	<div class="container" >
	<form name="form1" method="post" action="pros.php">
		<h2>LAUNDRY PAKET CUCI+SETRIKA</h2>
		<a href="index.html">KEMBALI </font></a><br>
		<table border="1" >

			<tr>
				<th>No </th>
				<th>Jenis Pakaian</th>
				<th>harga</th>
				<th>Jumlah pakaian </th>
				
			</tr>
			

			<tr>
				<th>1</th>
				<th>BAJU/CELANA</th>
				<th><input type="text" name="baju" id="baju" size="7" value="15000/kg" readonly></th>
				<th><input type="number" name="harga_baju" id="harga_baju" size="7" value="0" onchange="total()"></th>
				
			</tr>

			<tr>
				<th>2</th>
				<th>KEBAYA</th>
				<th><input type="text" name="kebaya" id="kebaya" size="7" value="20000/kg" readonly></th>
				<th><input type="number" name="harga_kebaya" id="harga_kebaya" size="7" value="0" onchange="total()"></th>
			</tr>

			<tr>
				<th>3</th>
				<th>DRESS</th>
				<th><input type="text" name="dress" id="dress" size="7" value="50000/kg" readonly></th>
				<th><input type="number" name="harga_dress" id="harga_php" size="7" value="0" onchange="total()"></th>
			</tr>
			<tr>
				<th>NAMA </th> 
				<th><input type="text" name="nama" id="nama" size="21" value="isi nama" onchange="total()"></th>	
			
				<th>ALAMAT </th> 
				<th><input type="text" name="alamat" id="alamat" size="21" value="isi alamat" onchange="total()"></th>	
				</tr>	
		
		<br><br>
	
		<tr>
		<td>

		<td><input type="submit" name="Submit" value="Kirim" >
		<input type="reset" name="Submit2" value="Batal">
		</td>
		</tr>
		</table>

	</form>	

	</div>
</body>
</html>










<!-- 
<tr>
				
				<th colspan="3" style="text-align:right">jumlah total</th>
				<th>@<input type="number" name="total" id="total" size="7" value="" readonly></th>
			</tr>
			
	<script type="text/javascript">
		function total() {
		var valgoritma = 75000 * parseInt(document.getElementById('harga_algoritma').value);
		var vjavascript = 45000 * parseInt(document.getElementById('harga_javascript').value);
		var vphp = 90000 * parseInt(document.getElementById('harga_php').value);

		var jumlah_harga = valgoritma + vjavascript + vphp;

		document.getElementById('total').value = jumlah_harga;
		}
		
		</script>
 -->
