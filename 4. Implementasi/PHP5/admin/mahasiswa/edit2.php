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
    		$idd=$_GET['id'];
		    $mhs=mysql_query("select * from mahasiswa where id_mahasiswa='$idd'");
		    $res_mhs=mysql_fetch_array($mhs);
		    $nama=$res_mhs['nama_mahasiswa'];
		    $status=$res_mhs['status'];
		    $c="Edit [$idd] $nama - Isikan Password Baru"; 
		    $kc="mahasiswa/edit.php?id=$idd"; 
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
													<form action="edit_proses2.php?id=<?php echo $idd; ?>" class="form-horizontal row-border" method="POST">
								                        <div class="form-group">
								                            <label class="col-sm-3 control-label">NIM</label>
								                            <div class="col-sm-5">
								                                <input type="text" value="<?php echo $idd ?>" disabled name='id' class="form-control mask" data-inputmask="'mask':'9999999999'" required="on" autofocus autocomplete="off">
								                            </div>
								                        </div>
								                        <div class="form-group">
														    <label class="col-sm-3 control-label">Nama</label>
														    <div class="col-sm-5">
														        <input type="text" disabled value="<?php echo $nama ?>" name='nama_baru' class="form-control" required="on" autofocus="on" autocomplete="off">
														    </div>
														</div>
															<div class="form-group">
														    <label class="col-sm-3 control-label">Password Baru</label>
														    <div class="col-sm-5">
														        <input type="password" name='password_baru' class="form-control" required="on"  autocomplete="off" placeholder="masukkan password baru">
														    </div>
								                            <div class="col-sm-4"><p class="help-block">masukkan password baru</p></div>
														</div>
														<div class="form-group">
														    <label class="col-sm-3 control-label">Masukkan Ulang Password Baru</label>
														    <div class="col-sm-5">
														        <input type="password" name='repassword_baru' class="form-control" required="on" autocomplete="off" placeholder="masukkan ulang password baru">
														    </div>
								                            <div class="col-sm-4"><p class="help-block">masukkan ulang password baru</p></div>
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