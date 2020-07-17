<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>

	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>

	<?php
	$a=1;
	include '../connect.php';
	$result = $db->prepare("SELECT jenis,dana,sum(sty) AS jumlah FROM tb_bansos where jenis='Alat Pelindung Diri'");
				$result->execute();
	while($d =$result->fetch()){
		?>
		<form method="post" action="update.php">
			<table border="1">
				<tr class="record">
			<td><?php echo $a++; ?></td>
			<td><?php echo $d['jenis']; ?></td>
			<td><?php echo $d['jumlah']; ?></td>
			<td><?php echo $d['dana']; ?></td>
			<td><a href="edit.php?jenis=<?php echo $row['jenis']; ?>"><button> Edit </button></a>
			<a href="#" id="<?php echo $row['suplier_id']; ?>" class="delbutton" title="Click To Delete"><button class="btn btn-danger btn-mini"> Delete</button></a></td>
			</tr>
				
			</table>

		</form>
		<?php
				}
			?>
	
</body>
</html>