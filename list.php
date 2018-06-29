

<div class="nav">
<div id="form1">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="table-scrol" style="margin-top:100px">
				<h1 align="center"><b> - Daftar Nilai - </b></h1>
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
							<thead>
							<tr>
									<th>NIM Mahasiswa</th>
									<th>Nama Mahasiswa</th>
									<th>Kelas Mahasiswa</th>
									<th>Grade</th>  
									<th>Option</th>
								</tr>
							</thead>
								<tr>
							<?php  
					        include("kone.php");
					        $view_users_query="select * from data where nim";//select query for viewing users.  
					        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.    
					        while($row=mysqli_fetch_array($run))//
						        {  
						            $a=$row[0];
									$b=$row[1];  
						            $c=$row[2];    
						            $e=$row[3];    
					        ?>   
						        <tr>  
									<td><?php echo $a;  ?></td> 
						            <td><?php echo $b;  ?></td>  
						            <td><?php echo $c;  ?></td>  
						            <td><?php echo $e;  ?></td>  
						            <td>
								
									
										<a href="eaddform.php?edit=<?php echo $a ?>"><button class="btn btn-success">Edit</button></a>
						    	        <a href="delete.php?del=<?php echo $a ?>"><button class="btn btn-warning">Delete</button></a>
						    	    </td>
						        </tr>
						        <?php } ?>
						        </table>
					</div>
					</div> 
					</div>
			</div>
		</div>
	</div>
</div>
