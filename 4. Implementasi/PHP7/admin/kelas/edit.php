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
		    $b="Kelas"; 
		    $kb="kelas/index.php";
    		    $idd=$_GET['id'];
		    $kls=mysqli_query($link,"select * from kelas where id_kelas='$idd'");
                    $res_kls=mysqli_fetch_array($kls);
		    $kls=$res_kls['kelas'];
		    $ta=$res_kls['tahun_akademik'];
		    $smt=$res_kls['semester'];
		    $stt=$res_kls['status'];
		    $c="Edit [$idd] $kls"; 
		    $kc="kelas/edit.php?id=$idd"; 
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
														    <label class="col-sm-3 control-label">Kelas</label>
														    <div class="col-sm-5">
														        <input type="text" name='nama' class="form-control mask" data-inputmask="'mask':'MI-9'" required="on" autofocus="on" autocomplete="off" placeholder="MI-x" value="<?php echo $kls ?>">
														    </div>
														</div>
								                        <div class="form-group">
								                            <label class="col-sm-3 control-label">Tahun Akademik</label>
								                            <div class="col-sm-5">
								                                <input type="text" name='tahun_akademik' class="form-control mask" data-inputmask="'mask':'9999/9999'" required="on" autofocus autocomplete="off" placeholder="20xx/20xx" value="<?php echo $ta; ?>">
								                            </div>
								                        </div>
								                        <div class="form-group">
														    <label class="col-sm-3 control-label">Semester</label>
														    <div class="col-sm-5">
														        <input type="text" name='semester' class="form-control mask" data-inputmask="'mask':'9'" required="on"  autocomplete="off" placeholder="x" value="<?php echo $smt ?>">
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