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
									  	  			<h3>TUGAS BESAR</h3>
									  	  		</div>
									  	  		<div class="row col-md-6">
											  	  	<table class="table">
										  	  			<tr>
										  	  				<td style="text-align: right">JUDUL</td>
										  	  				<td style="font-weight: bold">
										  	  					<?php 
										  	  						$sqltb=mysqli_query($link,"
										  	  							select * from tugasbesar, tugasbesar_mahasiswa
																		where tugasbesar.id_tb=tugasbesar_mahasiswa.id_tb
																		and tugasbesar_mahasiswa.id_mahasiswa='$s_username'
										  	  						");
										  	  						$arrtb=mysqli_fetch_array($sqltb);
										  	  						echo $arrtb['nama_sistem'];
										  	  					?> 
										  	  				</td>
										  	  			</tr>
											  	  	</table>
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