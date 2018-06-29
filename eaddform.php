<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Update</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>	
	<body >

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-success" style="margin-top:50px">
					<div class="panel-body">
						<div class="page-header">
							<h3 align="center"><b>Update Nilai</b></h3>
						</div>
						<form action="enilai.php" method="POST" role="form" enctype="multipart/form-data">
						<div class="form-group">
						<?php  
 						include("kone.php");  
						$id=$_GET['edit'];  
						$sa=$dbcon->query("select nim, n_mahasiswa, tugas, absen, uts, uas from data WHERE nim='$id'");//delete query
						$s=$sa->fetch_assoc()
						?>
						<div class="form-group">
								<label>Nama Mahasiswa</label>
								<input name="nama" value="<?php echo $s['n_mahasiswa'];?>" type="text" class="form-control" id="" placeholder="Masukan Nilai absen" required="required">
							</div>
						<label>Tugas</label>
						<input type="hidden" name="nim" value="<?php echo $id;?>" type="text" class="form-control" id="" required="required">
								<input name="tugas" value="<?php echo $s['tugas']; ?>" type="number" class="form-control" id="" placeholder="Masukan Nilai Tugas" required="required">
							</div>
							<div class="form-group">
								<label>Absen</label>
								<input name="absen" value="<?php echo $s['absen']; ?>" type="number" class="form-control" id="" placeholder="Masukan Nilai absen" required="required">
							</div>
							<div class="form-group">
								<label>Uts</label>
								<input name="uts" value="<?php echo $s['uts']; ?>" type="number" class="form-control" id="" placeholder="Masukan Nilai Uts" required="required">
							</div>
							<div class="form-group">
								<label>Uas</label>
								
								<input name="uas" value="<?php echo $s['uas']; ?>" type="number" class="form-control" id="" placeholder="Masukan Nilai Uas" required="required">
							</div>
								
							<button name="edit" type="submit" class="btn btn-primary">SIMPAN</button> &nbsp; <button type="cancel" class="btn btn-warning">BATAL</button>
						</form>
						
					</div>
				</div>
				</div>
		</div>
	</div>
	</div>
		<!-- jQuery -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- Bootstrap JavaScript -->
	</body>
</html>
