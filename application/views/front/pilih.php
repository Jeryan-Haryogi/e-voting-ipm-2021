 			<div class="navbar navbar-fixed-top">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">Electronic Voting IPM Kebayoran Lama</a>
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="javascript:void(0)">Hi ! <?php echo $this->session->userdata('username'); ?></a></li>
                        <li><a href="javascript:void(0)"></a></li>
                    </ul>
                </div>
            </div>

			<?php echo form_open('vote/pilih', ' class="form-horizontal"'); ?>
			<script>
				var _pemilih = 0;				
			</script>

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        						
							<div align="center">
								<img src="<?php echo base_url(); ?>/dist/img/logoipm2.png" class="logo-pilih"/>
							</div>
							<ol id="pilihan">
							</ol>
							<div align="center">
								<div data-toggle="modal" data-target=".btnReset"class="btn btn-info  btn-xs">Reset</div>
								<div id="piliha" data-toggle="modal" data-target=".btnPilih" class="btn btn-success btn-xs disabled">Submit</div>
								<div data-toggle="modal" data-target=".btnGolput" class="btn btn-danger  btn-xs">Logout</div>
							</div>
							
							
	
                        
                    </ul>
                    <?php if ($this->session->flashdata('session')) {
                    	echo $this->session->flashdata('session');
                    } ?>

                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        
        
        
<div id="page-wrapper">
    <div class="row">
        <div class="pilih isi" align="justify">
	
		<?php 
		$no = 1;
			$nomor = 0;
			foreach($calon->result_array() as $c) { 
		?>
            <div class="col-lg-2" align="center">

            				
                          	  
								
<div class="thumbnail" style="border: none;">
      <img src="<?php echo base_url(); ?>dist/img/<?php echo $c['foto'] ?>" width="100" alt="...">
      <div class="caption">
        <h3><div><?php echo $c['nama'] ?></div></h3>
        <div id="btn<?php echo $c['id'] ?>">
        	<div class='btn btn-primary' id="pilih<?php echo $c['id'] ?>">Pilih no <?php echo $no ?></div>		
        </div>
        <!-- Button trigger modal -->
<div  data-id="<?= $c['id'] ?>" data-nama="<?= $c['nama'] ?>" data-gambar="<?= $c['foto'] ?>" id="dataini" class="btn btn-info" data-toggle="modal" data-target="#exampleModal<?= $nomor ?>">
 Visi Misi
</div>

<!-- Modal -->

      </div>
    </div>
               
                <script>
                $(document).ready(function(){
           
                    var pi<?php echo $c['id'] ?> = 0;
                    $("#btn<?php echo $c['id'] ?>").click(function(){
							if(pi<?php echo $c['id'] ?>==0){
								$("#pilih<?php echo $c['id'] ?>").attr("class", "label label-warning");
								if(_pemilih>2){
									alert("Pilihan Anda lebih dari 3");
								} else {
									$("ol").append("<li id='pil<?php echo $c["id"] ?>'><?php echo "<input type='hidden' name='pilih[]' value='".$c['id']."'/>".$c['nama'] ?></li>");
									pi<?php echo $c['id'] ?> = 1;
									_pemilih = _pemilih+1;
									if(_pemilih==3){
										$("#piliha").attr("class", "btn btn-success btn-xs");
									} else {
										$("#piliha").attr("class", "btn btn-success btn-xs disabled");								
									}
								}
								
							} else {
								$("#pilih<?php echo $c['id'] ?>").attr("class", "label label-primary");
								$("#pil<?php echo $c['id'] ?>").remove();
								pi<?php echo $c['id'] ?> = 0;
								_pemilih = _pemilih-1;
								if(_pemilih==3){
									$("#piliha").attr("class", "btn btn-success btn-xs");
								} else {
									$("#piliha").attr("class", "btn btn-success btn-xs disabled");
								}
							}
                    });
                });

                </script>
            </div>  
        <?php $no++; $nomor++; } ?>
            
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

	<div class="modal fade btnPilih" tabindex="-1" role="dialog" aria-hidden="true" align="center">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Tentukan Pilihan</h4>
				</div>

				<div class="modal-body">
					<div class="form-group">
						<p>Sudah yakin akan pilihan anda ?</p>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
				</div>

			</div>
		</div>
	</div>

    <?php echo form_close(); ?>
	
		<div class="modal fade btnGolput" tabindex="-1" role="dialog" aria-hidden="true" align="center">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
						</button>
						<h4 class="modal-title" id="myModalLabel">Ingin Keluar ?</h4>
					</div>

					<div class="modal-body">
						<div class="form-group">
							<p>Yakin ingin keluar ? Hak Pilih Anda akan kami hapus.</p>
							<div class="btn btn-primary" data-dismiss="modal">Close</div>
							<a href="<?php echo site_url().'/vote/pilihNo'; ?>" class="btn btn-success">Exit Without Vote</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="modal fade btnReset" tabindex="-1" role="dialog" aria-hidden="true" align="center">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
						</button>
						<h4 class="modal-title" id="myModalLabel">Ingin Reset ?</h4>
					</div>

					<div class="modal-body">
						<div class="form-group">
							<p>Yakin ingin reset Pilihan anda ?</p>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
							<button type="submit" id="reset" class="btn btn-success" data-dismiss="modal">Reset</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php $nomor = 0; foreach ($calon->result_array() as $c): ?>
<div class="modal fade" id="exampleModal<?= $nomor  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Misi Dan Misi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        
        </button>
      </div>
      <div class="modal-body">
      	<div class="row">
      		
      		
      			<div class="col-sm-6">
      				 <img src="<?php echo base_url(); ?>dist/img/<?php echo $c['foto'] ?>" width="100" alt="...">
      				 <h3><b><?= $c['nama'] ?></b></h3>
      			</div>
      			<div class="col-sm-6">
      				<h2><b>Visi</b></h2>
      				<p><?= $c['visi'] ?></p>
      				<h2><b>Misi</b></h2>
      				<p><?= $c['misi'] ?></p>
      			</div>
      
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php $nomor++ ?>
		<?php endforeach ?>

		<script>

		$(document).ready(function(){
			      
			$("#reset").click(function(){
				location.reload();
			});
		});
	
		</script>		

    </body>
</html>
                