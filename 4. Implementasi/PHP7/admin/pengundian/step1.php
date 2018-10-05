<?php 
	include '../sistemnya.php';
	$idd=$_POST['kelas'];
	//jika tidak ada kelas
	if (!(isset($idd))) {
		header('location:index.php');	
	} 

	$cekmhskelas=mysqli_query($link, "
			SELECT *
			FROM presentasi
			right JOIN kelas_mahasiswa ON presentasi.id_mahasiswa=kelas_mahasiswa.id_mahasiswa
			where kelas_mahasiswa.id_kelas='$idd' and presentasi.id_presentasi IS NULL
			");
	$jumlah = mysqli_num_rows($cekmhskelas);
	//jika tidak ditemukan mahasiswa didalamnya
	if (($jumlah==0) OR ($jumlah=="") oR ($jumlah==NULL)) {
	    header('location:index.php');
	}
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
		    $c="[Step 1] Masa Tunggu dan Persiapan"; 
		    $kc="pengundian/step1.php?id=".$_POST['kelas']; 
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
    <?php include "../js_timer_step1.php"; // untuk timer js?>
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
												<div class="panel-heading" style="background-color: rgba(212, 211, 192, 0.5); margin-bottom: 10px;">
													<h1 style="color: #1A8300; font-weight: bold;">[STEP 1] Masa Tunggu & Persiapan</h1>
												</div>
											  	<?php 
											  		$ambilsql=mysqli_query($link, "
											  					SELECT *
																FROM presentasi
																right JOIN kelas_mahasiswa ON presentasi.id_mahasiswa=kelas_mahasiswa.id_mahasiswa
																where kelas_mahasiswa.id_kelas='$idd' and presentasi.id_presentasi IS NULL
																ORDER BY RAND()
																LIMIT 1
																");
											  		if (!$ambilsql) {
													    header('location:index.php');
													}
												?>
												<form id="cd" action="step2.php" name="cd" method="post">
												  	<input name="kelas" type="hidden" id="kelas" value="<?php echo "$idd"; ?>">
													<div class="col-md-3">
												  	  	<div class="panel panel-default">
												  	  		<div class="panel-heading">
												  	  			<h3>sisa waktu</h3>
												  	  		</div>
												  	  		<div class="row">
														  	  	<div class="form-group col-md-3">
																  	<input name="disp" type="text" id="txt" value="00:00" size="5" readonly="true" border="0">
															  	</div>
															</div>
												  	  	</div>												  		
												  	</div>
												  	<div class="col-md-9">
												  		<div class="panel panel-default">
													  		<div class="panel-heading">
													  			<h3>presentator</h3>
													  		</div>
														</div>
													  	<div class="form-group">
															<?php
													  		while ($b=mysqli_fetch_array($ambilsql)){
													  			$idmhs=$b['id_mahasiswa'];
													  			$ambilmhs=mysqli_query($link, "select nama_mahasiswa from mahasiswa where id_mahasiswa='$idmhs'");
													  			$arrambilmhs=mysqli_fetch_array($ambilmhs);
													  			echo "
													  				<h1 style='color:#B70E0E; font-weight: bold;'>".$idmhs."-".$arrambilmhs['nama_mahasiswa']."</h1>";?>
												  				<input name="nim" type="hidden" id="nim" value="<?php echo $b['id_mahasiswa'];?>">
															  	<p>
															  		<?php 
															  			$tb_sql=mysqli_query($link, "
															  				select * from mahasiswa,tugasbesar, tugasbesar_mahasiswa
															  				where tugasbesar_mahasiswa.id_mahasiswa='$idmhs'
															  				and tugasbesar.id_tb=tugasbesar_mahasiswa.id_tb
															  				and tugasbesar.status='1'
															  				and mahasiswa.status='1'
															  				"
															  			);
															  			$jumlah_tb=mysqli_num_rows($tb_sql);
															  			if ($jumlah_tb > 0){
															  				$datatb=mysqli_fetch_array($tb_sql);
															  				$nama_sistemnya=$datatb['nama_sistem'];
															  				echo "<h3>".$nama_sistemnya."</h3>";
															  			} else {
															  				echo "<h3> BELUM MEMILIKI JUDUL</h3>";
															  			}

															  		?>
															  	</p>
												  			<?php
														  	}
														  	?>
												  		</div>
												  	</div>
												</form>
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