<?php
	session_start();
	require '../koneksi.php';

	// $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
	// $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	$sql = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");

	// if(mysqli_num_rows($sql)){

	// 	$data = mysqli_fetch_assoc($sql);

	// 	if(password_verify($password, $data['password'])){
	// 		$_SESSION['login'] = true;
	// 		$_SESSION['user'] = $data['username'];
	// 		$_SESSION['level'] = $data['level'];



	// 		echo "<script>
	// 				alert('Login Berhasil');
	//                     window.location.href = 'haladmin.php';
	//                </script>";

	// 	}

	// }

	// echo "<script>
	// 		alert('Login Gagal);
	//         </script>";




	
	if (empty($username) || empty($password)) {
		echo "<script>
                    alert('Data Kosong');
                    window.location.href = 'login.php';
        	  </script>";
	}
	else
	{
		$sql = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");
		$jumlah = mysqli_num_rows($sql);

		if ($jumlah == 0) {
			echo "<script>
	                    alert('Username Salah');
	                    window.location.href = 'login.php';
	               </script>";
		}
		else
		{
			$row = mysqli_fetch_assoc($sql);

			if (password_verify($password, $row['password'])) 
			{
				$_SESSION['level'] = $row['level'];
				$_SESSION['user'] = $row['username'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['login'] = true;

				echo "<script>
	                    alert('Login Berhasil');
	                    window.location.href = '../index.php';
	        	      </script>";
			}
			else
			{
				# password salah
				echo "<script>
	                    alert('Password Salah');
	                    window.location.href = 'login.php';
	        	</script>";
			}
		}
	}
?>