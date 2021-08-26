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
	 
</head>

<body>
	<?php $this->load->view('template/sidebar-left');  ?>
	<!-- Right Panel -->
	<div id="right-panel" class="right-panel">
		<?php $this->load->view('template/header');  ?>
		<div class="breadcrumbs">
			<div class="breadcrumbs-inner">
				<div class="row m-0">
					<div class="col-sm-4">
						<div class="page-header float-left">
							<div class="page-title">
								<h1><?php echo $page_title; ?></h1>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="page-header float-right">
							<div class="page-title">
								<ol class="breadcrumb text-right">
									<li><a href="inventory">Dashboard</a></li>
									<li><a href="#"><?php echo $page_title; ?></a></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content">
			<!-- Animated -->
			<div class="animated fadeIn">
				<?php echo $this->session->flashdata('message');?>
				<!-- /#event-modal -->
				<div class="card">
				<form action="<?php echo base_url() . 'user/submit_user'  ?>" method="POST">


							<div class="form-group">
								<label class="form-control-label">Name</label>
								<input   name="name" required="" placeholder="Enter name ..." class="form-control" type="text">
							</div>
							<div class="form-group">
								<label class="form-control-label">Username</label>
								<input  name="username" required="" placeholder="Enter username ..." class="form-control" type="text">
							</div>
							<div class="form-group">
								<label class="form-control-label">Password</label>
								<input name="password"  placeholder="Enter password ..." class="form-control" type="password">
							</div>
							<div class="form-group">
								<label class="form-control-label">User Type</label>
								<select name="user_type" required="" class="form-control">
									<option value="">Select</option>
									<option value="Admin" >Admin</option>
									<option value="Guest" >Guest</option>
								</select>
							</div>
							<div class="form-group">
								<label class="form-control-label">Designation Office</label>
								<input  name="designation_office" required placeholder="Enter designation office ..." class="form-control" type="text">
							</div>
							<div class="text-right">
								<a href="#" onclick="location.reload()" class="btn btn-secondary">
									Reset
								</a>
								<button type="submit" class="btn btn-success">
									Add new 
								</button>
							</div>
					</form>
				</div>
			</div>
			<!-- /#add-category -->
		</div>
		<!-- .animated -->
	</div>
	<!-- /.content -->
	<div class="clearfix"></div>
	<!-- Footer -->
	<?php $this->load->view('template/footer'); ?>
	<!-- /.site-footer -->
	</div>
	<!-- /#right-panel -->

	<?php $this->load->view('template/js.php');  ?>

</body>

</html>
