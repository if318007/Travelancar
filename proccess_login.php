<?php
	
	require_once 'functions.php';

	if($_GET['action'] == 'login')
	{
		$nama = $_POST['nama'];
		$sandi = $_POST['sandi'];
		$login = LoginAkun($nama, $sandi);

		$row = mysqli_fetch_assoc($login);

			if($row['nama'] == $nama && $row['sandi'] == $sandi)
				{
					$_SESSION['logged_in']= TRUE;
					$_SESSION['nama']=$row['nama'];

						echo "<script>alert('Selamat datang $nama');
						window.location='beranda.php'; </script>";
					}
					
			else
			{
				echo "<script>alert('Username dan Password tidak valid.'); window.location ='login.php';
					</script>";
			}
	}
	?>