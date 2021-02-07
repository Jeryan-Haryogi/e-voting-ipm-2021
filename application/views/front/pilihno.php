 			<div class="navbar navbar-fixed-top">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">Electronic Voting Musywil XXIII IPM Jawa Tengah</a>
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
								<img src="<?php echo base_url(); ?>/dist/img/ipm.png" class="logo-pilih"/>
							</div>
							<ol id="pilihan">
							</ol>
							<div align="center">																
								<div data-toggle="modal" data-target=".btnGolput" class="btn btn-danger  btn-xs">Keluar</div>
							</div>

							
	
                        
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        
        
        
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12 pilih isi" align="justify">
			
			<strong>Data Formatur masih Kosong...</strong>
            
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
							<p>Yakin ingin reset Pilihan anda ?.</p>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
							<button type="submit" id="reset" class="btn btn-success" data-dismiss="modal">Reset</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	

		<script>
		$(document).ready(function(){
			$("#reset").click(function(){
				$("#pilihan").empty();
				_pemilih = 0;
			});
		});
		</script>		

    </body>
</html>
                