<?php  

require('kone.php');

//Menangkap value dari form login
$username = $_POST['username'];
$password = $_POST['password'];

//Cek password yang ada di database
$query =mysqli_query($dbcon,"SELECT * FROM admin WHERE username='$username' and password='$password'");
 
//Menghitung username dan password yang sesuai 
$count=mysqli_num_rows($query);

//Jika jumlah username dan password yang sesuai ada 1
if ($count == 1){
	//Anda berhasil login, maka akan diarahkan ke halaman dashboard
	$_SESSION['username'] = $username;
	header("location:admin.php");
}else{
//Username atau password tidak sesuai, maka anda akan diarahkan ke halaman index.php kembali
echo "<script> alert('Username = sahal | Password = 17140013'); document.location='index.html' </script>";
}


?>
