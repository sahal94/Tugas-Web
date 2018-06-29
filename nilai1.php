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
			<div class="col-md-8 col-md-offset-2" style="margin-top:125px">
				<div class="panel panel-success" style="margin-top:50px">
					<div class="panel-body">
						<div class="page-header">
							<h3 align="center"><b>--Masukan Nilai--</b></h3>
						</div>
						<form action="nilai.php" method="POST" role="form" enctype="multipart/form-data">
						<div class="form-group">
                <label>Pilih Mahasiswa</label>
                <select name="nim" id="input" class="form-control" required="required">
                    <option value="0">--Pilih Mahasiswa--</option>
                    <?php
                    include'kone.php';
                    $proses=$dbcon->query("select * from data"); //*ini proses looping dan fetch_object untuk mengambil data dari database 
                    while ($data=$proses->fetch_object()) 
                    { 
                      ?>
                    <option value="<?php echo $data->nim ?>"><?php echo $data->n_mahasiswa ?></option>
                    <?php } ?>

                </select>
              </div>
            	<div class="form-group">
								<label>Tugas</label>
								<input name="tugas" type="number" class="form-control" id="" placeholder="Masukan Nilai Tugas" required="required">
							</div>
							<div class="form-group">
								<label>Absen</label>
								<input name="absen" type="number" class="form-control" id="" placeholder="Masukan Nilai absen" required="required">
							</div>
							<div class="form-group">
								<label>Uts</label>
								<input name="uts" type="number" class="form-control" id="" placeholder="Masukan Nilai Uts" required="required">
							</div>
							<div class="form-group">
								<label>Uas</label>
								<input name="uas" type="number" class="form-control" id="" placeholder="Masukan Nilai Uas" required="required">
							</div>
								
							<button name="simpan" type="submit" class="btn btn-primary">SIMPAN</button> &nbsp; <button type="cancel" class="btn btn-warning">BATAL</button>
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