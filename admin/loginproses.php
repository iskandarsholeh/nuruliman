<?php 
// mengaktifkan session php

 
// menghubungkan dengan koneksi
include '../db/db_connection.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['pass'];


// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($db_connection,"SELECT * FROM users where username='$username' ");

$cek = mysqli_num_rows($result);

if($cek == 1) {
	while($data = mysqli_fetch_assoc($result)){
		if(password_verify($password,$data['password']))
		{
		

			if($data['akses']=="1"){
		
				$_SESSION['id'] = $data['id'];
				$_SESSION['nama'] = $data['nama'];
				$_SESSION['status'] = "admin";
				header("location:../admin-master");
				} 
				else if ($data['akses'] == "2") {
			
				$_SESSION['id'] = $data['id'];
				$_SESSION['nama'] = $data['nama'];
				$_SESSION['status'] = "pembeli";
					header("location:eshopper");
					}

		}
		else
		{
	

		echo "<script>
			alert('email atau password salah ');
			window.location.href='index.php';
			</script>";
		}
	
	
	}
	}
 else {
	echo "<script>
	alert('email atau password salah ');
	window.location.href='index.php';
	</script>";
}

    

?>