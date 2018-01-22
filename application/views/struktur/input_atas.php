<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title ?></title>
  	<?php $this->load->view('include/head'); ?>
  	<?php $this->load->view('include/link_input_atas'); ?>
</head>

<body class="animated-content">
    <?php $this->load->view('include/sidebar_atas'); ?>
        <div id="wrapper">
            <div id="layout-static">
			<?php $this->load->view('include/sidebar_kiri'); ?>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                            </ol>
                            <div class="container-fluid">
              								<div class="panel panel-default" data-widget='{"draggable": "false"}'>
              									<div class="panel-heading">
              										<h2><?php echo $title ?></h2>
              									</div>
              									<div class="panel-editbox" data-widget-controls=""></div>
              									<div class="panel-body">
              										<!-- form input -->
