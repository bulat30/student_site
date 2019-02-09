<?php
$mysqli = new mysqli("localhost", "root", "root", "myBase");
			$mysqli->query("SET NAMES 'utf8'");
			$query = mysqli_query($mysqli, "SELECT * FROM spisok");
			$data = mysqli_fetch_assoc($query);
			$names =  $data['fio'];
			
			echo $names;

?>