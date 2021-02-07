<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="justify">
            <h1 class="page-header">Pengaturan Evoting</h1>

            
			
			<div class="col-lg-6">
				
				<h3>Access Login</h3>
				<br/>
				<?php echo form_open('control/changeLog'); ?>
					<div class="form-group">
						<input class="form-control floating-label" name="username" id="focusedInput" type="text" placeholder="Your UserName" value="<?php echo $this->session->userdata('usernamec'); ?>">
					</div>
					<div class="form-group">
						<input class="form-control floating-label" name="password" id="focusedInput" type="password" placeholder="Your Pasword Access" >
					</div>
					<div class="col-lg-12">
						<button type="reset" class="btn btn-sm btn-primary">Reset</button>
						<button type="submit" class="btn  btn-sm btn-success">Submit</button>
					</div>
				<?php echo form_close(); ?>
				
				<?php echo form_open_multipart('control/exupload');?>
					<h3>Excel Pemilih</h3>
					<div class="form-group">
						<div>
							<input type="text" readonly class="form-control floating-label" placeholder="Browse Data Pemilih...">
							<input type="file" id="file_upload" name="userfile" multiple>
						</div>
					</div>
					<div class="col-lg-12">
						<button type="submit" class="btn btn-sm btn-success">Upload</button> <a href="<?php echo base_url(); ?>dist/peserta.xls">Download Contoh File Data Pemilih</a>
					</div>
				<?php echo form_close();?>			
				
				
				<h3>Setting Print QrCode</h3>
				<br/>
				<?php echo form_open('control/changeQr'); ?>
					<?php foreach($setqr->result_array() as $s) { ?>
						<div class="form-group col-lg-6">
							<input class="form-control floating-label" name="atas" id="focusedInput" type="text" placeholder="Margin Atas" value="<?php echo $s['atas']; ?>">
						</div>
						<div class="form-group col-lg-6">
							<input class="form-control floating-label" name="kiri" id="focusedInput" type="text" placeholder="Margin Kiri" value="<?php echo $s['kiri']; ?>">
						</div>
						<div class="col-lg-12">
							<button type="reset" class="btn btn-sm btn-primary">Reset</button>
							<button type="submit" class="btn  btn-sm btn-success">Submit</button>
						</div>
					<?php } ?>
				<?php echo form_close(); ?>
				
			</div>
            
			<div class="col-lg-6">
				
				
				
				<h3>Reset Data</h3>
				<h4><a href="#" data-toggle="modal" data-target=".resetPemilih"><button type="submit" class="btn btn-sm btn-success">RESET</button></a> Reset Daftar Pemilih</h4>
				<h4><a  href="#" data-toggle="modal" data-target=".resetFormatur"><button type="submit" class="btn btn-sm btn-success">RESET</button></a> Reset Daftar Calon Formatur</h4>
				<h4><a  href="#" data-toggle="modal" data-target=".resetRekapitulasi"><button type="submit" class="btn btn-sm btn-success">RESET</button></a> Reset Rekapitulasi Perhitungan</h4>
				<h4><a  href="#" data-toggle="modal" data-target=".resetRevoting"><button type="submit" class="btn btn-sm btn-success">RESET</button></a> Reset reVoting</h4>
				
				
			</div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->


                <?php echo form_open('control/resetPemilih', ' class="form-horizontal form-label-left"'); ?>    
                    <div class="modal fade resetPemilih" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Reset Data Pemilih</h4>
                                </div>

                                <div class="modal-body">
                                    Anda Yakin akan MENGHAPUS seluruh data Pemilih ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Reset Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo form_close(); ?>

                <?php echo form_open('control/resetFormatur', ' class="form-horizontal form-label-left"'); ?>    
                    <div class="modal fade resetFormatur" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Reset Data Formatur</h4>
                                </div>

                                <div class="modal-body">
                                    Anda Yakin akan MENGHAPUS seluruh data Formatur ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Reset Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo form_close(); ?>

                <?php echo form_open('control/resetRekapitulasi', ' class="form-horizontal form-label-left"'); ?>    
                    <div class="modal fade resetRekapitulasi" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Reset Data Rekapitulasi</h4>
                                </div>

                                <div class="modal-body">
                                    Anda Yakin akan MENGHAPUS seluruh data Rekapitulasi ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Reset Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo form_close(); ?>

                <?php echo form_open('control/resetRevoting', ' class="form-horizontal form-label-left"'); ?>    
                    <div class="modal fade resetRevoting" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Reset Data reVoting</h4>
                                </div>

                                <div class="modal-body">
                                    Anda Yakin akan MENGHAPUS seluruh data reVoting ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Reset Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo form_close(); ?>