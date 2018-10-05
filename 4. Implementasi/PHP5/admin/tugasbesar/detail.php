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
		    $b="Tugas Besar"; 
		    $kb="tugasbesar/index.php";
    		$idd=$_GET['id'];
		    $tugasbesar=mysql_query("select * from tugasbesar where id_tb='$idd'");
		    $res_tugasbesar=mysql_fetch_array($tugasbesar);
		    $nama=$res_tugasbesar['nama_sistem'];
		    $id_kelas=$res_tugasbesar['id_kelas'];
		    $status=$res_tugasbesar['status'];
		    $c="Detail [$idd] $nama"; 
		    $kc="tugasbesar/detail.php?id=$idd"; 
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
													<h2><?php echo $c; ?></h2>
												</div>
												<div class="panel-body no-padding">
													<div class="col-md-12">
														<div class="form-horizontal row-border">
															<div class="panel-default">
																<h4>TUGAS BESAR</h4>
															</div>
															<table class="table table-bordered table-striped">
																<tr>
																	<th style="text-align: right; font-weight: bold;" class="col-md-2">ID</th>
																	<td class="col-md-10"><?php echo $idd; ?></td>
																</tr>
																<tr>
																	<th style="text-align: right; font-weight: bold;" class="col-md-2">NAMA SISTEM</th>
																	<td class="col-md-10"><?php echo $nama; ?></td>
																</tr>
																<tr>
																	<th style="text-align: right; font-weight: bold;" class="col-md-2">KELAS</th>
																	<td class="col-md-10"><?php echo $id_kelas; ?></td>
																</tr>
																<tr>
																	<th style="text-align: right; font-weight: bold;" class="col-md-2">STATUS</th>
																	<td class="col-md-10"><?php echo $status; ?></td>
																</tr>
															</table>
														</div>
													</div>
													<div class="col-md-12">
														<div class="panel-default">
															<h4>ANGGOTA</h4>
														</div>
														<table class="table table-striped table-bordered">
															<thead>
																<th style="text-align: center;">NO</th>
																<th style="text-align: center;">NIM</th>
																<th style="text-align: center;">NAMA</th>
																<th style="text-align: center;">AKSI</th>
															</thead>
															<tbody>
																<tr>
																	<form action="tambah_mahasiswa.php?id=<?php echo $idd; ?>" method="POST">
																		<td style="text-align: center;">
																			#
																		</td>
																		<td colspan="3">
																			<?php 
																			#ambil data propinsi
																			$query = "
																				SELECT *
																				FROM tugasbesar_mahasiswa km
																				right JOIN mahasiswa m
																				ON km.id_mahasiswa=m.id_mahasiswa
																				where m.status='1'
																				";
																			$sql = mysql_query($query);
																			$arrmahasiswa = array();
																			while ($row = mysql_fetch_assoc($sql)) {
																				if ($row['id_tb']==NULL) {
																					$arrmahasiswa [ $row['id_mahasiswa'] ] = $row['nama_mahasiswa'];
																				} 														
																			}
																			?>
																			<select id="demo3" required="on" name="demo3[]" multiple="multiple" style="width: 400px;">
																				<?php
																				foreach($arrmahasiswa as $id_mahasiswa=>$nama_mahasiswa) {
																					echo "<option value='$id_mahasiswa'>$id_mahasiswa - $nama_mahasiswa</option>";
																				}
																				?>
																			</select>
																			<input type="submit" class="btn btn-primary" value="TAMBAH">
																		</td>
																	</form>
																</tr>
																<?php 
																$query = mysql_query("
																	select * from tugasbesar_mahasiswa,mahasiswa
																	where 
																	tugasbesar_mahasiswa.id_tb='$idd' 
																	AND tugasbesar_mahasiswa.id_mahasiswa=mahasiswa.id_mahasiswa
																");
																$no=1;
																while ($dt=mysql_fetch_array($query)){?>
																	<tr>
																		<td><center><?php echo $no; ?></center></td>
																		<td><?php echo $dt['id_mahasiswa']; ?></td>
																		<td><?php echo $dt['nama_mahasiswa']; ?></td>
																		<td>
																			<a class="btn btn-danger" href="<?php echo $base_url.'admin/tugasbesar/hapus_mhs.php?id='.$dt['id_mahasiswa'].'&tugasbesar='.$idd; ?>" >
																				<i class="fa fa-trash"></i>
																				<span>&nbsp HAPUS</span>
																			</a>
																		</td>
																	</tr>
																	<?php 
																	$no++;
																}
																?>
															</tbody>
														</table>
													</div>
												</div>
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