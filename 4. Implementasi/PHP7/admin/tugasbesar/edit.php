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
		    $tugasbesarnya=mysqli_query($link, "select * from tugasbesar where id_tb='$idd'");
		    $res_tugasbesar=mysqli_fetch_array($tugasbesarnya);
		    $id_tb=$res_tugasbesar['id_tb'];
		    $tugasbesar=$res_tugasbesar['nama_sistem'];
		    $status=$res_tugasbesar['status'];
		    $id_kelas=$res_tugasbesar['id_kelas'];
		    $c="Edit [$idd] $tugasbesar";
		    $kc="tugasbesar/edit.php?id=$idd"; 
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
													<form action="edit_proses.php?id=<?php echo $idd; ?>" class="form-horizontal row-border" method="POST">
								                        <div class="form-group">
														    <label class="col-sm-3 control-label">Nama Sistem</label>
														    <div class="col-sm-5">
														        <textarea name='nama_sistem' class="form-control" required autofocus>
														        <?php echo $tugasbesar; ?>
														        </textarea>
														    </div>
														</div>
								                        <div class="form-group">
															<label class="col-sm-3 control-label">Kelas</label>
															<div class="col-sm-5">
																<select class="form-control" id="source" placeholder="pilih kelas" required="on" name="kelas">
																	<option value="">pilih kelas</option>
																	<?php 
																		$query = mysqli_query($link, "select * from kelas where status='1'");
																		$no=1;
																		while ($dt=mysqli_fetch_array($query)){?>
																			<option 
																				<?php if ($dt["id_kelas"]==$id_kelas){ echo "selected";}?>
																				value="<?php echo $dt['id_kelas']; ?>"><?php echo 'Kelas: '.$dt['kelas'].' || SMT: '.$dt['semester'].' || Tahun Akademik: '.$dt['tahun_akademik']; ?></option>
																			<?php 
																			$no++;
																		}
																	?>
																</select>
															</div>
														</div>
														<div class="panel-footer">
											                <div class="row">
											                    <div class="col-sm-6 col-sm-offset-3">
											                        <div class="btn-toolbar">
																		<input type='submit' class="btn btn-warning" value="SIMPAN EDIT">
											                        	</input>
											                            <a class="btn btn-default" href="<?php echo $base_url.'admin/'.$kb; ?>" >
																			<i class="fa fa-chevron-left"></i>
																			<span>&nbsp Back</span>
																		</a>
											                        </div>
											                    </div>
											                </div>
											            </div>
													</form>
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