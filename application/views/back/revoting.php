<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="justify">
            <h1 class="page-header">re Evoting</h1>
			
			<div class="col-lg-9">
			
				<table id="examples" class="table table-striped responsive-utilities">
					<thead>
						<tr class="headings">
							<th class="col-lg-2">Suara</th>
							<th class="col-lg-3">Formatur</th>

							<th class="col-lg-7">Presentase</th>
						</tr>
					</thead>

					<tbody>

					   <?php foreach($formatur->result_array() as $f) { ?>
							<?php
								$pi = 0;
								$total = $hitung->num_rows();
							?>
							<tr class="even pointer">


								<?php foreach($hitung->result_array() as $p) { ?>
									<?php
										$pilih = $p['pilih'];
										$dd = explode(" ", $pilih);
										for($i=0;$i<count($dd);$i++)
										 { 
											if($dd[$i]==$f['id']) {
												$pi=$pi+1;
											}
										 } 
									?>

								<?php } 
									if($pi!=0){
										$persen = (100/$total)*$pi;
									} else {
										$persen = "0";
									} 
								?>
								<td class=" " align="center"><?php echo $pi; ?></td>
								<td class=" "><strong><?php echo $f['nama']; ?></strong></td>
								<td class=" ">
									<div class="col-lg-12">
										<div class="progress progress-striped active" style="margin-top:0px; margin-bottom:0px;">
											<div class="progress-bar" style="width:<?php echo $persen; ?>%" ></div>
										</div>

									</div>
									<br/>
									<p style="margin-top:-30px; margin-bottom:0px; margin-left:15px"><small><?php echo $persen; ?> %</small></p>
								</td>
							</tr>
						<?php } ?> 
					</tbody>
				</table>
				
				
			</div>
			<div class="col-lg-3">
				<p>reEvoting Ikatan Pelajar Muhammadiyah ini berfungsi untuk pemilihan ulang apabila hal hal yang tidak diinginkan terjadi</p>
				- Panitia Pemilihan -
				<hr/>
				<?php echo form_open('control/revotingco'); ?>
				<div class="well" style="position: relative;">
					<canvas class="col-lg-12" id="webcodecam-canvas"></canvas>
					<div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
					<div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
					<div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
					<div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
				</div>
				
				
				Your Code <div class='label label-info' id="play"><i class="fa fa-camera fa-fw"></i> QR-Code</div><input name="code" class="form-control" type="text"/>
				<p id="scanned-QR"></p>				
				
				<button type="reset" class="btn btn-sm btn-danger">Cancel</button>
				<button type="submit" class="btn btn-sm btn-primary">Submit</button>
				<?php echo form_close(); ?> 
			</div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<select class="form-control" id="camera-select" style="display: none"></select>
<div id="decode-img"></div><div id="grab-img"></div><div id="pause"></div><div id="stop"></div>
<img width="0" height="0" id="scanned-img" src="" style="display: none">

		<script src="<?php echo base_url(); ?>dist/js/jquery.dataTables.js"></script>
        
        <script>
        $(document).ready(function() {
            $('#examples').dataTable();
        } );

        </script>
		
		<script>
			var halaman = '<?php echo site_url(); ?>';
		</script>
		<script type="text/javascript" src="<?php echo base_url(); ?>dist/js/qrcodec/filereader.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>dist/js/qrcodec/qrcodelib.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>dist/js/qrcodec/webcodecamjs.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>dist/js/qrcodec/main.js"></script>
