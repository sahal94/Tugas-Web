<?php
session_start();
include 'kone.php';
			$j	= $_POST['tugas'];
			$n	= $_POST['absen'];
			$p	= $_POST['uts'];
			$d	= $_POST['uas']; 
			$a = (($j/100)*25)+(($n/100)*20)+(($p/100)*25)+(($d/100)*30);
       
         if($a<"20"){
         $bobot=E;
      }else if ($a<"40"){
          $bobot=D;          
      } else if ($a<"60"){
          $bobot=C;        
      } else if ($a<"80"){
          $bobot=B;        
      } else{
          $bobot=A;
      }
         
	$nim=$_POST['nim'];

	
	$proses=mysqli_query($dbcon,"UPDATE data SET tugas='$j', absen='$n', uts='$p',uas='$d', grade='$bobot' where nim='$nim'");
	if ($proses) {
		echo "<script> alert('Data berhasil di input'); document.location='admin.php' </script>";
	}
	else{
		echo "<script> alert('Data gagal di input'); document.location='admin.php' </script>";
	}
 ?>