<?php
$db_connection = mysqli_connect("us-cdbr-east-04.cleardb.com","b4d4b5e8043e16","1109892b","heroku_afcc4630639690d");

$nama = $_POST['name'];
$user = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$akses = $_POST['akses'];

$cek = mysqli_num_rows(mysqli_query($db_connection,"SELECT * FROM users WHERE username='$user'"));
if ($cek > 0){
echo "<script>window.alert('Username yang anda masukan sudah ada')
window.location='register.php'</script>";
// Kalau username valid, inputkan data ke tabel users
}else{


        mysqli_query($db_connection, "INSERT INTO users (nama,username,password,akses) VALUES('$nama','$user','$password','$akses')") or die(mysqli_error($db_connection));
        header('Location: index.php');
}
?>

