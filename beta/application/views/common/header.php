<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<!-- jQuery-->
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.min.1.11.1.js"></script>
<!-- bootstrap js-->
<script type="text/javascript" src="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

<!--lightbox js-->
<script type="text/javascript" src="<?=base_url();?>assets/lightbox/js/lightbox.min.js"></script>

<!--styles-->
<link rel="stylesheet" href="<?=base_url();?>assets/css/app.css">

<title>Demenna Cranes</title>
</head>
<?php
	$cur_page = $this->uri->segment(1);
?>
<body>
<div id="pattern"></div>
<div id="wrapper"><!-- closes in footer-->
    <header>
        <div id="header">
        	<div id="logo">
            	<img src="<?=base_url();?>assets/img/core/demennaCranesLogo.png" title="Demenna Cranes logo" alt="demennaCranesLogo.png">
            </div>
            
            <div id="nav-wrap">
                <div class="container">
                    <nav>
                        <ul class="nav nav-pills nav-app push">
                            <li><a <?=$cur_page == '' ? 'class="active"' : '';?> href="<?=base_url();?>">Home</a></li>
                            <li><a <?=$cur_page == 'about' ? 'class="active"' : '';?> href="<?=base_url();?>about">About</a></li>
                            <li><a <?=$cur_page == 'services' ? 'class="active"' : '';?> href="<?=base_url();?>services">Service</a></li>
                        </ul>
                        <ul class="nav nav-pills nav-app pull">
                            <li><a <?=$cur_page == 'fleet' ? 'class="active"' : '';?> href="<?=base_url();?>fleet">Fleet</a></li>
                            <li><a <?=$cur_page == 'projects' ? 'class="active"' : '';?> href="<?=base_url();?>projects">Projects</a></li>
                            <li><a <?=$cur_page == 'contact' ? 'class="active"' : '';?> href="<?=base_url();?>contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
               
            </div>
            
        </div>
    </header>