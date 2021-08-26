<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
	<?php $this->load->view('template/meta.php');  ?>
	<?php $this->load->view('template/css.php');  ?>
	<style>
		
		#typing {

			width: 0ch;
			color: white;
			float: left;
			font-family: sans-serif;
			font-weight: bold;
			font-size: 70px;
			overflow: hidden;
			white-space: nowrap;
			animation: typing 10s steps(100) 1s infinite alternate;
		}

		#typing span {
			color: red;
		}

		#crow {
			float: left;

			color: white;
			font-family: consolas;
			font-weight: bold;
			font-size: 60px;
			animation: crow 0.5s linear 0s infinite;
		}

		@keyframes typing {
			from {
				width: 0ch;
			}

			to {
				width: 25ch;
			}
		}

		@keyframes crow {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@keyframes spin {
			from {
				transform: rotate(0deg);
			}

			to {
				transform: rotate(360deg);
			}
		}

		.loader {
			animation: 5s spin linear infinite;
		}

		.widget {
			cursor: pointer;
		}
	</style>

</head>

<body>
	<?php $this->load->view('template/sidebar-left');  ?>
	<!-- Right Panel -->
	<div id="right-panel" class="right-panel">
		<?php $this->load->view('template/header');  ?>
		<div class="content">
			<!-- Animated -->
			<div class="animated fadeIn">
				<!-- Widgets  -->
				<div class="row animated zoomIn  ">
					<div class="widget col-lg-3 col-md-6" onclick='location.href="<?php echo base_url() . 'user' ?>"'>
						<div class="card text-white bg-flat-color-6">
							<div class="card-body">
								<div class="card-left pt-1 float-left">
									<h3 class="mb-0 fw-r">
										<span class="widget-count"><?php echo $tot_user; ?></span>
									</h3>
									<p class="text-light mt-1 m-0">Users</p>
								</div>
								<div class="card-right float-right text-right">
									<i class="icon icon-lg animated wobble fas fa-user"></i>
								</div>
							</div>
						</div>
					</div>

					<div class="widget col-lg-3 col-md-6" onclick='location.href="<?php echo base_url() . 'request' ?>"'>

						<div class="card text-white bg-flat-color-3">
							<div class="card-body">
								<div class="card-left pt-1 float-left">
									<h3 class="mb-0 fw-r">
										<span class="widget-count"><?php echo $tot_supply; ?></span>
									</h3>
									<p class="text-light mt-1 m-0">Supply</p>
								</div>
								<div class="card-right float-right text-right">
									<i class="icon   icon-lg animated fadeInLeft  fas fa-cubes"></i>
								</div>
							</div>
						</div>
					</div>
					<div class=" widget col-lg-3 col-md-6" onclick='location.href="<?php echo base_url() . 'request' ?>"'>

						<div class="card text-white bg-flat-color-4">
							<div class="card-body">
								<div class="card-left pt-1 float-left">
									<h3 class="mb-0 fw-r">
										<span class="widget-count"><?php echo $tot_pending; ?></span>
									</h3>
									<p class="text-light mt-1 m-0">Pending</p>
								</div>
								<div class="card-right float-right text-right">
									<i class="icon   icon-lg animated wobble loader  fas fa-spinner"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="widget col-lg-3 col-md-6" onclick='location.href="<?php echo base_url() . 'release' ?>"'>
						<div class="card text-white bg-flat-color-1">
							<div class="card-body">
								<div class="card-left pt-1 float-left">
									<h3 class="mb-0 fw-r">
										<span class="widget-count"><?php echo $tot_release; ?></span>
									</h3>
									<p class="text-light mt-1 m-0">Released</p>
								</div>
								<div class="card-right float-right text-right">
									<i class="icon   icon-lg animated tada  fas fa-archive"></i>
								</div>
							</div>
						</div>
					</div>


				</div>

						
				<div class="row animated zoomIn  " >
					<div class="col-lg-12">
						<div class="card" style="background-color:black;">
							<div  id="typing">WELCOME <span>AGAIN HERE</span></div>
							<div id="crow">|</div>
							<div class="mb-3" >
								<img src="<?php echo base_url() ?>images/is_main.png" alt="" width="310" height="40";>
							</div>
						</div>
					</div>
				</div>
				<!-- /Widgets -->
				<!--  /Traffic -->
				<div class="clearfix"></div>
			</div>
			<!-- .animated -->
		</div>
		<!-- /.content -->
		<div class="clearfix"></div>
		<!-- Footer -->

		<?php $this->load->view('template/footer.php');  ?>
		<!-- /.site-footer -->
	</div>
	<!-- /#right-panel -->

	<?php $this->load->view('template/js.php');  ?>
</body>

</html>
