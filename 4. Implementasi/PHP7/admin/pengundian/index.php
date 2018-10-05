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
		    $b="Pengundian"; 
		    $kb="pengundian/index.php"; 
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
    <body class="infobar-overlay sidebar-hideon-collpase sidebar-scroll animated-content">
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
											<div class="panel panel-default" >
												<div class="panel-heading" style="background-color: rgba(139, 195, 74, 0.47); margin-bottom: 10px;">
													<h1 style="color: red; text-align: center; font-weight: bold;">PENGUNDIAN</h1>
												</div>
												<form action="step1.php" method="POST" class="form-horizontal row-border">
													<div class="row">
														<div class="form-group">
															<label class="col-sm-2 control-label col-md-offset-1" style="margin-top: 25px;">Pilih Kelas : </label>
															<div class="col-sm-5" style="margin-top: 25px;">
																<select class="form-control" id="source" placeholder="pilih kelas" required="on" name="kelas">
																	<option value="">pilih kelas</option>
																	<?php 
																		$query = mysqli_query($link, "select * from kelas where status='1'");
																		$no=1;
																		while ($dt=mysqli_fetch_array($query)){?>
																			<option value="<?php echo $dt['id_kelas']; ?>"><?php echo 'Kelas: '.$dt['kelas'].' || SMT: '.$dt['semester'].' || Tahun Akademik: '.$dt['tahun_akademik']; ?></option>
																			<?php 
																			$no++;
																		}
																	?>
																</select>
															</div>
															<div class="col-sm-1" style="margin-top: 22px;margin-bottom: 40px";>
										                        <div class="btn-toolbar">
										                        	<input type='submit' class="btn btn-warning btn-lg" value="UNDI">
										                        	</input>
										                        </div>
										                    </div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h2><?php echo 'DAFTAR HASIL '.$b; ?></h2>
													<div class="panel-ctrls"></div>
												</div>
												<div class="panel-body no-padding">
													<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
														<thead>
															<tr>
																<th width="7%"><center>NO</center></th>
																<th width="15%"><center>NIM</center></th>
																<th width="23%"><center>NAMA</center></th>
																<th width="20%"><center>WAKTU</center></th>
																<th width="22%"><center>NILAI</center></th>
															</tr>
														</thead>
														<tbody>
															<?php 
																$query = mysqli_query($link, "select * from presentasi where status='1'");
																$no=1;
																while ($dt=mysqli_fetch_array($query)){?>
																	<tr>
																		<td><center><?php echo $no; ?></center></td>
																		<td><?php echo $dt['id_mahasiswa']; ?></td>
																		<td>
																			<?php 
																				$nim=$dt['id_mahasiswa'];
																				$sqlmhs=mysqli_query($link, "select * from mahasiswa where id_mahasiswa='$nim'");
																				$ambilmhs=mysqli_fetch_array($sqlmhs);
																				echo $ambilmhs['nama_mahasiswa'];
																			?>
																		</td>
																		<td><?php echo $dt['waktu']; ?></td>
																		<td style='text-align:center;'>
																			<?php 
																				$ah=$dt['analisis_hasil'];
																				$ap=$dt['analisis_pemahaman'];
																				$dh=$dt['desain_hasil'];
																				$dp=$dt['desain_pemahaman'];
																				$ih=$dt['implementasi_hasil'];
																				$ip=$dt['implementasi_pemahaman'];
																				$ra=0.25*(($ah+$ap)/2);
																				$rd=0.25*(($dh+$dp)/2);
																				$ri=0.5*(($ih+$ip)/2);
																				$rtot=$ra+$rd+$ri;
																				echo $rtot;
																			?>
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
																<th><center>ID</center></th>
																<th><center>MAHASISWA</center></th>
																<th><center>WAKTU</center></th>
																<th><center>NILAI</center></th>
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