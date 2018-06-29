<?php 
		include 'kone.php';
			$nim	= $_POST['nim'];
			$nama = $_POST['nama'];
			$kelas	= $_POST['kelas'];
				
			$insert = $dbcon->query("INSERT INTO data (nim,n_mahasiswa,k_mahasiswa) VALUES('$nim','$nama','$kelas')");
			if ($insert){ // jika isi variable $proses bernilai true maka
	echo "<script>alert('Artikel Berhasil Disimpan');document.location = 'admin.php'</script>";
}else{ //jika variable bernial false
	echo "<script>alert('Artikel Gagal Disimpan')".$mysqli->error."</script>";

}

?>