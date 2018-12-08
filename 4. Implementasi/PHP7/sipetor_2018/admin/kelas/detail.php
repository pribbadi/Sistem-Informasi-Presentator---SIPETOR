<?php 
	include '../sistemnya.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/png">
    <meta charset="utf-8">
    <title>
    	<?php 
    		// DEKLARASI INISIALISASI UNTUK TITLE DAN BREADCUMB
		    $a=$namasistemnya; //nampak
		    $ka="sipetor";  //link
		    $b="Kelas"; 
		    $kb="kelas/index.php";
    		$idd=$_GET['id'];
		    $kls=mysqli_query($link, "select * from kelas where id_kelas='$idd'");
		    $res_kls=mysqli_fetch_array($kls);
		    $nama=$res_kls['kelas'];
		    $ta=$res_kls['tahun_akademik'];
		    $smt=$res_kls['semester'];
		    $status=$res_kls['status'];
		    $c="Detail [$idd] $nama"; 
		    $kc="kelas/detail.php?id=$idd"; 
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
													<div class="col-md-4">
														<div class="form-horizontal row-border">
															<div class="panel-default">
																<h4>KELAS</h4>
															</div>
															<table class="table table-bordered table-striped">
																<tr>
																	<th style="text-align: right">ID</th>
																	<td><?php echo $idd; ?></td>
																</tr>
																<tr>
																	<th style="text-align: right">NAMA</th>
																	<td><?php echo $nama; ?></td>
																</tr>
																<tr>
																	<th style="text-align: right">TAHUN AKADEMIK</th>
																	<td><?php echo $ta; ?></td>
																</tr>
																<tr>
																	<th style="text-align: right">SEMESTER</th>
																	<td><?php echo $smt; ?></td>
																</tr>
																<tr>
																	<th style="text-align: right">STATUS</th>
																	<td><?php echo $status; ?></td>
																</tr>
															</table>
														</div>
													</div>
													<div class="col-md-8">
														<div class="panel-default">
															<h4>DAFTAR MAHASISWA</h4>
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
																		<td colspan="2">
																			<?php 
																			$query = " 
																				SELECT *
																				FROM kelas_mahasiswa km
																				right JOIN mahasiswa m
																				ON km.id_mahasiswa=m.id_mahasiswa
																				where m.status='1'
																				";
																			$sql = mysqli_query($link, $query);
																			$arrmahasiswa = array();
																			while ($row = mysqli_fetch_assoc($sql)) {
																				if ($row['id_kelas']==NULL) {
																					$arrmahasiswa [ $row['id_mahasiswa'] ] = $row['nama_mahasiswa'];
																				} 														
																			}
																			?>
																			<select id="demo3" required="on" name="demo3[]" multiple="multiple" style="width: 450px">
																				<?php
																				foreach($arrmahasiswa as $id_mahasiswa=>$nama_mahasiswa) {
																					echo "<option value='$id_mahasiswa'>$id_mahasiswa - $nama_mahasiswa</option>";
																				}
																				?>
																			</select>
																		</td>
																		<td style="text-align: center;"  width="10%">
																			<input type="submit" class="btn btn-primary" value="TAMBAH">
																		</td>
																	</form>
																</tr>
																<?php 
																$query = mysqli_query($link, "
																 select * from kelas_mahasiswa,mahasiswa
																	where 
																	kelas_mahasiswa.id_kelas='$idd' 
																	AND kelas_mahasiswa.id_mahasiswa=mahasiswa.id_mahasiswa
																");
																$no=1;
																while ($dt=mysqli_fetch_array($query)){?>
																	<tr>
																		<td><center><?php echo $no; ?></center></td>
																		<td><?php echo $dt['id_mahasiswa']; ?></td>
																		<td><?php echo $dt['nama_mahasiswa']; ?></td>
																		<td>
																			<a class="btn btn-danger" href="<?php echo $base_url.'admin/kelas/hapus_mhs.php?id='.$dt['id_mahasiswa'].'&kls='.$idd; ?>" >
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