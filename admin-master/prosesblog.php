<?php
require '../db/db_connection.php';

$judul = $_POST['judul'];
$rand = rand();
// $ekstensi1 =  array('mp4','mkv','avi','3gp');
// $ekstensi2 =  array('pdf','doc','pptx');
$ekstensi =  array('png','jpg','jpeg','gif','JPG','PNG');
$tanggal = date("Y-m-d H:i:s");
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$deskripsi = $_POST['deskripsi'];
$isi = $_POST['isi'];
$youtube = $_POST['youtube']; 

if(!in_array($ext,$ekstensi) ) {
    echo "<script>alert('Ektensi foto salah');history.go(-1)</script>";
}else{
	if($ukuran < 904407099 ){		
		$xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$rand.'_'.$filename);
        
        
        mysqli_query($db_connection,"INSERT INTO work (judul,foto,deskripsi,isi,youtube,date) VALUES('$judul','$xx','$deskripsi','$isi','$youtube','$tanggal')") or die(mysqli_error($db_connection));
        header('Location: blog.php');
        // echo "ERROR, data gagal diupdate". mysqli_error();
	}else{
        // header('Location: team.php');
        echo "ERROR, data gagal diupdate". mysqli_error();
	}
}



?>