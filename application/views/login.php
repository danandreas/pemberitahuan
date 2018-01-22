<!DOCTYPE html>
<html lang="en" class="coming-soon">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<?php $this->load->view('include/head'); ?>

	
	<link type="text/css" href="<?php echo base_url() ?>assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url() ?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url() ?>assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">               <!-- Themify Icons -->
	<link type="text/css" href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">
</head>

<body class="focused-form animated-content">


	<div class="container" id="login-form">
		<a href="index.html" class="login-logo"><img src="<?php echo base_url() ?>assets/img/icon.png" width="70px"></a>
		<div class="row">
			
			<!-- ///////////// PERINGATAN /////////////// -->
			<?php  if (isset($salah)){ ?>
			<div class="alert alert-danger col-md-4 col-md-offset-4" "<?php echo $salah; ?>hidden"> <!-- jika login salah maka attributnya bergabung "nothidden"-->
				<p align="center">Kombinasi username dan password salah! </p>
			</div>
			<?php } ?>
			<!-- ///////////// PERINGATAN /////////////// -->

			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>Login</h2>
					</div>
					<div class="panel-body">
						
						<form method="post" action="<?php echo base_url()?>login/check" class="form-horizontal">
							<div class="form-group mb-md">
								<div class="col-xs-12">
									<div class="input-group">							
										<span class="input-group-addon">
											<i class="ti ti-user"></i>
										</span>
										<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
									</div>
								</div>
							</div>
							<div class="form-group mb-md">
								<div class="col-xs-12">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="ti ti-key"></i>
										</span>
										<input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
									</div>
								</div>
							</div>
							<div class="panel-footer">
								<div class="clearfix">
									<button type="submit" class="btn btn-primary pull-right">Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->

	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/velocityjs/velocity.ui.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->

	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->

	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/application.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/demo/demo.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/demo/demo-switcher.js"></script>

</body>
</html>
