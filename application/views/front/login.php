		<div class="row login">
			<div class="col-lg-offset-4 col-lg-4">
				<div class="bs-component form-horizontal" align="center">
					<img src="<?php echo base_url(); ?>/dist/img/logoipm2.png" class="logo" style="width: 100%;" id="logo"/>
					
					<div class="well" style="position: relative;display:none; " id="camer">
						<canvas width="320" height="240" id="webcodecam-canvas"></canvas>
						<div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
						<div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
						<div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
						<div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
					</div>
						
					<?php echo $this->session->flashdata('login'); ?>
					<?php echo form_open('vote/login'); ?>
						<div class="form-group">
							<div class="col-lg-12" align="center">

								<label class="col-lg-5 control-label">Your Code </label>
								<div class="col-lg-7">
									<?php echo form_input($code); ?><p id="scanned-QR"></p>
								</div>
								<button type="submit" class="btn btn-primary">Login</button>

								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
							  	Lihat Panduan Pemilihan
								</button>
							</div>
						</div> 
					<?php echo form_close(); ?> 
					
				</div>
			</div>
		</div>

                	
                	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Panduan Pemilihan</h5>
      </div>
      <div class="modal-body">
      	<img src="<?php echo base_url(); ?>/dist/img/logoipm2.png" class="logo" style="width: 50%; text-align: center;" id="logo"/>
		<ol style="margin-top: -68px;">
			<h3 style="text-align: center;"><b>PANDUAN PEMILIHAN</b></h3>
			<h4><b><li>Login Dengan Code Akses Yang Telah Diberikan Oleh Panitian</li></b></h4>

			<h4><b><li>Peserta Pemilih Bisa Melihat Visi Misi Dari Setiap Formatur</li></b></h4>

			<h4><b><li>Peserta Diharuskan Memilih Formatur Sebanyak 8 Formatur</li></b></h4>

			<h4><b><li>Jika Peserta Yakin Dari Hasil Formatur Yang Dipilih Silahkan Di Submit</li></b></h4>

			<h4><b><li>Peserta Hanya Diberikan Sekali Akses Ketika Sudah Memilih</li></b></h4>
		</ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>               
<select class="form-control" id="camera-select" style="display: none"></select>
<div id="decode-img"></div><div id="grab-img"></div><div id="pause"></div><div id="stop"></div>
<img width="0" height="0" id="scanned-img" src="" style="display: none">
                            
                        
                   
		<footer class="footer">
          <div align="center">
            <p class="text-muted" id="foo">Copyright <?= date('Y') ?> - eVoting IPM</p>
          </div>
        </footer>
		<script>
			var halaman = '<?php echo site_url(); ?>';
		</script>
			<script type="text/javascript" src="<?php echo base_url(); ?>/dist/js/qrcode/filereader.js"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>/dist/js/qrcode/qrcodelib.js"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>/dist/js/qrcode/webcodecamjs.js"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>/dist/js/qrcode/main.js"></script>

		<script>
			$(document).ready(function(){
				$("#play").click(function(){
					$("#logo").hide();
					$("#camer").fadeIn();
				});
			});
		</script>
    </body>
</html>
                