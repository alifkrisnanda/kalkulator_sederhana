<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
</head>
<body>
	<?php
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$bil3 = $_POST['bil3'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2+$bil3;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2-$bil3;
			break;
			case 'kali':
				$hasil = $bil1*$bil2*$bil;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2/$bil3;
			break;			
		}
	}
	?>

</body>
</html>