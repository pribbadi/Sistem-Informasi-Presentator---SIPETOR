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
		    $b="Hasil Penilaian"; 
		    $kb="penilaian/index.php"; 
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
											<?php 
												$mhs_presentasi=mysql_query("
													select * from presentasi
													where presentasi.id_mahasiswa='$s_username'
												");
												$cekdata=mysql_num_rows($mhs_presentasi);
												if ($cekdata==0) { ?>
													<div class="panel panel-default">
											  	  		<div class="panel-heading">
											  	  			<h3>Hasil Penilaian</h3>
											  	  		</div>
											  	  		<div class="row col-md-12">
											  	  			<h2>BELUM MELAKUKAN PRESENTASI</h2>
											  	  		</div>
											  	  	</div>
												<?php
												} elseif ($cekdata==1) {
													?>
													<div class="panel panel-default">
											  	  		<div class="panel-heading">
											  	  			<h3>Hasil Penilaian</h3>
											  	  		</div>
											  	  		<div class="row col-md-12">
											  	  			<?php 
											  	  				$arr_mhspresentasi=mysql_fetch_array($mhs_presentasi);											  	  				
											  	  			?>
													  	  	<table class="table">
												  	  			<tr>
												  	  				<th width="2%" style="text-align: center">NO</th>
												  	  				<th width="15%" style="text-align: center;">KATEGORI</th>
												  	  				<th width="40%" style="text-align: center;">POINT</th>
												  	  				<th width="10%" style="text-align: center;">NILAI</th>
												  	  				<th width="10%" style="text-align: center;">RATA-RATA</th>
												  	  			</tr>
												  	  			<tr>
												  	  				<td style="text-align: center;" rowspan="3">1</td>
												  	  				<td style="text-align: left; font-size: 25pt;" rowspan="3">ANALISIS</td>
												  	  				<td style="text-align: left;">HASIL</td>
												  	  				<td style="text-align: left;"><?php echo $arr_mhspresentasi['analisis_hasil']; ?></td>
												  	  				<td style="text-align: center; font-size: 30pt;" rowspan="3">
												  	  					<?php 
												  	  						$jum1=$arr_mhspresentasi['analisis_hasil']+$arr_mhspresentasi['analisis_pemahaman'];
												  	  						$rat1=$jum1/2;
												  	  						echo "$rat1";
												  	  					?>
												  	  				</td>
												  	  			</tr>
												  	  			<TR>
												  	  				<td style="text-align: left;">PEMAHAMAN</td>
												  	  				<td><?php echo $arr_mhspresentasi['analisis_pemahaman']; ?></td>
												  	  			</TR>
												  	  			<tr>
												  	  				<td colspan="2"><i>komentar:</i> <?php echo $arr_mhspresentasi['analisis_komentar']; ?></td>
												  	  			</tr>
												  	  			<tr>
												  	  				<td style="text-align: center" rowspan="3">2</td>
												  	  				<td style="text-align: left; font-size: 25pt;" rowspan="3" >DESAIN</td>
												  	  				<td style="text-align: left;">HASIL</td>
												  	  				<td style="text-align: left;"><?php echo $arr_mhspresentasi['desain_pemahaman']; ?></td>
												  	  				<td style="text-align: center; font-size: 30pt;" rowspan="3">
												  	  					<?php 
												  	  						$jum2=$arr_mhspresentasi['desain_hasil']+$arr_mhspresentasi['desain_pemahaman'];
												  	  						$rat2=$jum2/2;
												  	  						echo "$rat2";
												  	  					?>
												  	  				</td>
												  	  			</tr>
												  	  			<TR>
												  	  				<td style="text-align: left;">PEMAHAMAN</td>
												  	  				<td><?php echo $arr_mhspresentasi['desain_pemahaman']; ?></td>
												  	  			</TR>
												  	  			<tr>
												  	  				<td colspan="2"><i>komentar:</i> <?php echo $arr_mhspresentasi['desain_komentar']; ?></td>
												  	  			</tr>
												  	  			<tr>
												  	  				<td style="text-align: center" rowspan="3">3</td>
												  	  				<td style="text-align: left; font-size: 25pt;" rowspan="3">IMPLEMENTASI</td>
												  	  				<td style="text-align: left;">HASIL</td>
												  	  				<td style="text-align: left;"><?php echo $arr_mhspresentasi['implementasi_hasil']; ?></td>
												  	  				<td style="text-align: center; font-size: 30pt;" rowspan="3">
												  	  					<?php 
												  	  						$jum3=$arr_mhspresentasi['implementasi_hasil']+$arr_mhspresentasi['implementasi_pemahaman'];
												  	  						$rat3=$jum3/2;
												  	  						echo "$rat3";
												  	  					?>
												  	  				</td>
												  	  			</tr>
												  	  			<TR>
												  	  				<td style="text-align: left;">PEMAHAMAN</td>
												  	  				<td><?php echo $arr_mhspresentasi['implementasi_pemahaman']; ?></td>
												  	  			</TR>
												  	  			<tr>
												  	  				<td colspan="2"><i>komentar:</i> <?php echo $arr_mhspresentasi['implementasi_komentar']; ?></td>
												  	  			</tr>
												  	  			<tr>
												  	  				<td colspan="4" style="text-align: center; font-size: 50pt;">
												  	  					HASIL AKHIR
												  	  				</td>
												  	  				<td style="text-align: center; font-size: 50pt;">
												  	  					<?php 
												  	  						$hasilakhir=($rat1+$rat2+$rat3)/3;
												  	  						echo "$hasilakhir";
												  	  					?>
												  	  				</td>
												  	  			</tr>
													  	  	</table>
														</div>
											  	  	</div>
												<?php
												}
											?>											
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