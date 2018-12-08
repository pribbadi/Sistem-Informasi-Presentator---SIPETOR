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
		    $nama=$res_tugasbesar['nama_sistem'];
		    $stt=$res_tugasbesar['status'];
		    $kelas=$res_tugasbesar['id_kelas'];
		    $c="Nonaktifkan [$idd] $nama"; 
		    $kc="tugasbesar/nonaktifkan.php?id=$idd";
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
													<form action="nonaktifkan_proses.php?id=<?php echo $idd; ?>" class="form-horizontal row-border" method="POST">
								                        <div class="form-group">
														    <label class="col-sm-3 control-label">Nama Sistem</label>
														    <div class="col-sm-5">
														        <input type="text"  disabled="on" name='nama' class="form-control" value="<?php echo $nama; ?>">
														    </div>
														</div>
								                        <div class="form-group">
								                            <label class="col-sm-3 control-label">Status</label>
								                            <div class="col-sm-5">
								                                <input type="text" name='status' class="form-control" disabled="on" value="<?php echo $stt; ?>">
								                            </div>
								                        </div>
								                        <div class="form-group">
														    <label class="col-sm-3 control-label">Kelas</label>
														    <div class="col-sm-5">
														        <input type="text" name='kelas' class="form-control mask" disabled="on" value="<?php echo $kelas; ?>">
														    </div>
														</div>
														<div class="panel-footer">
											                <div class="row">
											                    <div class="col-sm-6 col-sm-offset-3">
											                        <div class="btn-toolbar">
											                            <a class="btn btn-default" href="<?php echo $base_url.'admin/'.$kb; ?>" >
																			<i class="fa fa-chevron-left"></i>
																			<span>&nbsp Back</span>
																		</a>
											                        	<input type='submit' class="btn btn-danger" value="NONAKTIFKAN">
											                        	</input>
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