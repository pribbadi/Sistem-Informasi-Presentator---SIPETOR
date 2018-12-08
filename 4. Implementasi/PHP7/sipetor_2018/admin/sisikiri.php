<div id="wrapper">
    <div id="layout-static">
        <div class="static-sidebar-wrapper sidebar-default">
            <div class="static-sidebar">
                <div class="sidebar">
					<div class="widget">
				        <div class="widget-body">
				            <div class="userinfo">
				                <div class="avatar">
				                    <img src="<?php echo $base_url.'assets/icon_dosen.png'; ?> " class="img-responsive img-circle"> 
				                </div>
				                <div class="info">
				                    <span class="username"><?php echo $nama; ?></span><br>
				                    <span class="useremail"><?php echo $level; ?></span>
				                </div>
				            </div>
				        </div>
				    </div>
					<div class="widget stay-on-collapse" id="widget-sidebar">
				        <nav role="navigation" class="widget-body">
							<ul class="acc-menu">
								<li class="nav-separator"><span>MENU UTAMA</span></li>
								<li>
									<a href="<?php echo $base_url.'admin/halamanutama/'; ?>" >
										<i class="fa fa-user"></i>
										<span>Halaman Utama</span>
									</a>
								</li>
								<li>
									<a href="<?php echo $base_url.'admin/mahasiswa/';?>">
										<i class="fa fa-user"></i>
										<span>Mahasiswa</span>
									</a>
								</li>
								<li>
									<a href="<?php echo $base_url.'admin/kelas/';?>">
										<i class="fa fa-users"></i>
										<span>Kelas</span>
									</a>
								</li>
								<li>
									<a href="<?php echo $base_url.'admin/tugasbesar/'?>">
										<i class="fa fa-file"></i>
										<span>Tugas Besar</span>
									</a>
								</li>
								<li>
									<a href="<?php echo $base_url.'admin/pengundian/';?> ">
										<i class="fa fa-archive"></i>
										<span>Pengundian dan Penilaian</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
    		</div>
		</div>
		<div class="static-content-wrapper">
			<div class="static-content">
    			<div class="page-content">
	                <ol class="breadcrumb">            
						<li><a href="../halamanutama/">Home</a></li>
						<li class="active"><a href="../halamanutama/">Halaman Utama</a></li>
					</ol>
	            	<div class="container-fluid">
						<div data-widget-group="group1">
							<div class="row">
								<div class="col-md-12">
									ISI
								</div>
							</div>
						</div>
                    </div> <!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div>
            <footer role="contentinfo">
				<div class="clearfix">
			        <ul class="list-unstyled list-inline pull-left">
			            <li><h6 style="margin: 0;">&copy; 2017 Transcipta Infotama</h6></li>
			        </ul>
					<button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
				</div>
			</footer>
        </div>
    </div>
</div>