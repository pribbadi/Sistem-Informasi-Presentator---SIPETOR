<?php 
	include '../sistemnya.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
    	<?php 
    		// DEKLARASI INISIALISASI UNTUK TITLE DAN BREADCUMB
		    $a=$namasistemnya; //nampak
		    $ka="sipetor";  //link
		    $b="Mahasiswa"; 
		    $kb="mahasiswa/index.php"; 
		    $c=""; 
		    $kc=""; 
		    $d=""; 
		    $kd=""; 
		    $e=""; 
		    $ke=""; 
		    $pemisah= " || ";
			include '../titlenya.php';
			echo $title;
		?>
	</title>
	<!-- PARSER LIBRARY CSS -->
    <?php include "../cssnya.php"; ?>
    <body class="infobar-overlay sidebar-hideon-collpase sidebar-scroll animated-content" id="tooltips-demo">
        <!-- PARSER HEADER -->
    	<?php include "../headernya.php"; ?>
		<div id="wrapper">
		    <div id="layout-static">
				<?php include "../kontenkirinya.php"; ?>	
				<div class="static-content-wrapper">
        			<div class="static-content">
            			<div class="page-content">
			                <?php include '../breadcumbnya.php' ?>
			               	<div class="container-fluid">
								<div data-widget-group="group1">
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h2><?php echo $b; ?></h2>
													<div class="panel-ctrls"></div>
												</div>
												<div class="panel-body no-padding">
													<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
														<thead>
															<tr>
																<th width="7%"><center>NO</center></th>
																<th width="20%"><center>NIM</center></th>
																<th width="45%"><center>NAMA</center></th>
																<th width="28%">
																	<center>
																		<a class="btn btn-sm btn-primary tooltips"
																			data-original-title="Tambah <?php echo $b ?>"
																			href="tambah.php">
																			<i class="fa fa-plus"></i> Tambah
																		</a>
																	</center>
																</th>
															</tr>
														</thead>
														<tbody>
															<?php 
																$query = mysqli_query($link, "select * from mahasiswa where status='1'");
																$no=1;
																while ($dt=mysqli_fetch_array($query)){?>
																	<tr>
																		<td><center><?php echo $no; ?></center></td>
																		<td><?php echo $dt['id_mahasiswa']; ?></td>
																		<td><?php echo $dt['nama_mahasiswa']; ?></td>
																		<td><center>
																			<a class="btn btn-sm btn-info tooltips"
																				data-original-title="Detail [<?php echo $dt['id_mahasiswa'];?>] <?php echo $dt['nama_mahasiswa'];?>"
																				href="<?php echo 'detail.php?id='.$dt['id_mahasiswa'] ?>">
																				<i class="fa fa-search"></i> detail
																			</a>
																			<a class="btn btn-sm btn-warning tooltips"
																				data-original-title="Edit [<?php echo $dt['id_mahasiswa'];?>] <?php echo $dt['nama_mahasiswa'];?>"
																				href="<?php echo 'edit.php?id='.$dt['id_mahasiswa']; ?>">
																				<i class="fa fa-edit"></i> edit
																			</a>
																			<a class="btn btn-sm btn-danger tooltips"
																				data-original-title="Nonaktifkan [<?php echo $dt['id_mahasiswa'];?>] <?php echo $dt['nama_mahasiswa'];?>"
																				href="<?php echo 'nonaktifkan.php?id='.$dt['id_mahasiswa']; ?>">
																				<i class="fa fa-trash"></i> Nonaktifkan
																			</a>
																			</center>
																		</td>
																	</tr>
																	<?php 
																	$no++;
																}
															?>
														</tbody>
														<tfoot>
															<tr>
																<th><center>NO</center></th>
																<th><center>NIM</center></th>
																<th><center>Nama</center></th>
																<th width="28%">
																	<center>
																		<a class="btn btn-sm btn-primary tooltips"
																			data-original-title="Tambah <?php echo $b ?>"
																			href="tambah.php">
																			<i class="fa fa-plus"></i> Tambah
																		</a>
																	</center>
																</th>
															</tr>
														</tfoot>
													</table>
												</div>
												<div class="panel-footer"></div>
											</div>
										</div>
									</div>
								</div>
                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                    <?php include '../footernya.php'; ?>
                </div>
		    </div>
		</div>
	    <!-- PARSER LIBRARY JS -->
	    <?php include "../jsnya.php"; ?>
    </body>
</html>