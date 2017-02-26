<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/web'); ?>/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/web'); ?>/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php echo !empty($title) ? $title." | " : ""; ?>DreamSpark - UP2TI</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
  <link href="<?php echo base_url('assets/web'); ?>/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url('assets/web'); ?>/css/material-kit.css" rel="stylesheet"/>
	<link href='<?php echo base_url('assets/web/css/sweetalert.css'); ?>' rel='stylesheet'/>
  <link href='<?php echo base_url('assets/web/css/style.css?ver='.date("YmdHis")); ?>' rel='stylesheet'/>
</head>

<body>

<!-- Navbar will come here -->

<!-- end navbar -->

<div class="wrapper">
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main">
		<div class="container-fluid">

			{content}

		</div>
	</div>
</div>

<div class='loading'>
	<span>
		<i class='fa fa-spin fa-cog'></i> Loading&hellip;
	</span>
</div>

</body>

	<!--   Core JS Files   -->
	<script src="<?php echo base_url('assets/web'); ?>/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/web'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/web'); ?>/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="<?php echo base_url('assets/web'); ?>/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="<?php echo base_url('assets/web'); ?>/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="<?php echo base_url('assets/web'); ?>/js/material-kit.js" type="text/javascript"></script>

	<!-- SweetAlert -->
	<script src='<?php echo base_url('assets/web/js/sweetalert.min.js'); ?>'></script>

  <!-- UP2TI Custom Script -->
  <script src='<?php echo base_url('assets/web/js/script.js?ver='.date("YmdHis")); ?>'></script>

</html>
