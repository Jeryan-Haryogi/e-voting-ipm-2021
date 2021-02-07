<html>
	<body>

			<img src="<?php echo base_url(); ?>/dist/img/logoipm2.png" class="logo" style="width: 50%;" id="logo"/>
		<?php foreach($setqr->result_array() as $s) { ?>
		<div style="margin-top:<?php echo $s['atas']; ?>; margin-left:<?php echo $s['kiri']; ?>">
			<?php
				echo '<h1><b>Akses Login Pemilihan Formatur Tetap</b></h1>';
				echo "<hr>";
				echo "<br/>";
				echo "Nama : <strong>".$nama."</strong>";
				echo "<br/>";
				echo "Code Akses Masuk : <strong>".$data."</strong>";
			?>
		</div>
		<?php } ?>
		<script type="text/javascript">
			window.print();
		</script>
	</body>
</html>