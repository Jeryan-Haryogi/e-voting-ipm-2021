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
		<?php 
			foreach($qr->result_array() as $q) { ?>
		<div class="col-lg-2">
			<?php
				$kod = $q['kode'];
				$params['data'] = $kod;
				$params['level'] = 'H';
				$params['size'] = 3;
				$params['savename'] = FCPATH.'dist/img/qr/'.$kod.'.png';
				$this->ciqrcode->generate($params);
				echo '<img src="'.base_url().'dist/img/qr/'.$q['kode'].'.png" />';
				echo "<div id='na'><strong>".$q['nama']."</strong></div>";
				echo $q['asal'];
				echo "<br/>".$q['kode'];
				//echo $q['kode'];
			?>
		</div>
		<?php } ?>
		<script type="text/javascript">
			var str = document.getElementById("na").innerHTML; 
			var res = str.replace("%20", " ");
			document.getElementById("na").innerHTML = res;
			//window.print();
		</script>
	</body>
</html>