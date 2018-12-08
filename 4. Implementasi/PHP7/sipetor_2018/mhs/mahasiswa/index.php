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
									  	  			<h3>mahasiswa</h3>
									  	  		</div>
									  	  		<div class="row col-md-6">
											  	  	<table class="table">
										  	  			<tr>
										  	  				<td style="text-align: right">NIM</td>
										  	  				<td style="font-weight: bold"><?php echo $s_username; ?> </td>
										  	  			</tr>
										  	  			<tr>
										  	  				<td style="text-align: right">USERNAME</td>
										  	  				<td style="font-weight: bold"><?php echo $s_nama; ?> </td>
										  	  			</tr>
										  	  			<tr>
										  	  				<td style="text-align: right">LEVEL</td>
										  	  				<td style="font-weight: bold"><?php echo $s_level; ?> </td>
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