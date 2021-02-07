<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Control eVoting Musywil XXIII IPM Jawa Tengah</title>
        
        <link href="<?php echo base_url(); ?>dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>dist/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>dist/css/sb-admin.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>dist/css/roboto.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>dist/css/material-fullpalette.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>dist/css/ripples.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>dist/css/snackbar.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>dist/css/muktamar.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>dist/css/jquery.dataTables.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>dist/css/autocomplete/jquery.autocomplete.css" rel="stylesheet">
         
        <script src="<?php echo base_url(); ?>dist/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/bootstrap.min.js"></script>        
        
    </head>
    
    <body>
        <div id="wrapper">
            <div class="navbar navbar-fixed-top">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>/control">Control eVoting IPM Kebayoran Lama</a>
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="javascript:void(0)">Hi ! Administrator</a></li>
                        <li><a href="javascript:void(0)"></a></li>
                    </ul>
                </div>
            </div>

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo site_url(); ?>/control"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url().'/control/pemilih'; ?>"><i class="fa fa-adn fa-fw"></i> Daftar Pemilih</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target=".tambahPemilih"><i class="fa fa-chain fa-fw"></i> Tambah Pemilih</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url().'/control/formatur'; ?>"><i class="fa fa-foursquare fa-fw"></i> Daftar Calon Formatur</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target=".tambahFormatur"><i class="fa fa-fighter-jet fa-fw"></i> Tambah Calon Formatur</a>
                        </li>
						<li>
                            <a href="<?php echo site_url().'/control/setting'; ?>"><i class="fa fa-random fa-fw"></i> Pengaturan eVoting</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url().'/control/panduan'; ?>"><i class="fa fa-outdent fa-fw"></i> Panduan System</a>
                        </li>
                         <li>
                            <a href="<?php echo site_url(); ?>/control/hasil"><i class="fa fa-database fa-fw"></i> Hasil Voting</a>
                        </li>
						 <li>
                            <a href="<?php echo site_url().'/control/revoting'; ?>"><i class="fa fa-repeat fa-fw"></i> re-Evoting</a>
                        </li>
                        
                         <li>
                            <a href="<?php echo site_url().'/control/copy'; ?>"><i class="fa fa-globe fa-fw"></i> Copyright</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/control/logout'; ?>"><i class="fa fa-truck fa-fw"></i> Log Out</a>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        
        
        