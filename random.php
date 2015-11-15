<html>
<head></head>

	<?php 
		if (!empty($_POST)){
			$nama = $_post['nama'];
			$email = $_post ['email'];
			
			echo 'Hallo: '.$nama;
			echo 'Email' .$email;
		}
	?>
</html>