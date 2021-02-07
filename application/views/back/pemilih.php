<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="justify">
            <h1 class="page-header">Daftar Pemilih</h1>
            <table id="examples" class="table table-striped responsive-utilities">
                <thead>
                    <tr class="headings">
                        <th>Nama</th>
						<th>Status</th>
                        <th>NBA</th>
                        <th>Asal</th>
                        <th>Kode Pilih</th>
                        <th>Hak Pilih</th>
                        <th class=" no-link last"><span class="nobr">Action</span>
                        </th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach($pemilih->result_array() as $p) { ?>
                    <tr class="even pointer">
                        <td class=" "><?php echo $p['nama']; ?></td>
						<td class=" "><?php if($p['tetap']==1) { echo "<div class='label label-primary'>Tetap</div>"; } else { echo "<div class='label label-danger'>Sementara</div>"; } ?></td>
                        <td class=" "><?php echo $p['nba']; ?></td>
                        <td class=" "><?php echo $p['asal']; ?></td>
						<td class=" "><?php echo $p['kode']; ?>  <a href="<?php echo site_url(); ?>/control/qrcode/<?php echo $p['kode']; ?>/<?php echo $p['nama']; ?>"><div class='label label-info'><i class="fa fa-print fa-fw"></i> Print Code</div> </a></td>
                        <td class=" "><?php if($p['hak']==1) { echo "<div class='label label-primary'>memiliki</div>"; } else { echo "<div class='label label-danger'>Tidak Memiliki</div>"; } ?></td>
                        <td class=" last" >
                            <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $p['id'] ?>"><div class='label label-success'><i class="fa fa-edit fa-fw"></i> Edit</div></a>
                            <a href="<?php echo base_url(); ?>index.php/control/delPemilih/<?php echo $p['id'] ?>" onClick='return confirm("Anda yakin ingin menghapus \"<?php echo $p['nama'] ?> \" ?")'><div class='label label-danger'><i class="fa fa-trash fa-fw"></i> Hapus</div></a> 
                            <?php echo form_open('control/updPemilih', ' class="form-horizontal form-label-left"'); ?>
                            <div class="modal fade bs-example-modal-lg<?php echo $p['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Pemilih</h4>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nama 
                                        </label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <input name="nama" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $p['nama'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">NBA 
                                        </label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <input name="nba" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $p['nba'] ?>">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Asal 
                                        </label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <input name="asal" type="search" style="width:380px" id="first-name" required="required" class="form-control autocomplete asal col-md-12" value="<?php echo $p['asal'] ?>">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="ge<?php echo $p['id'] ?>">Kode Pilih <div id="gen<?php echo $p['id'] ?>" class="label label-info">Generate</div>
                                        </label>

										<script>
											$(document).ready(function(){
												$("#gen<?php echo $p['id'] ?>").click(function(){
													$("#ge<?php echo $p['id'] ?>").val("<?php echo $this->hak->gen($p['nama']); ?>");
												});
											});
										</script>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <input name="kode" type="text" id="ge<?php echo $p['id'] ?>" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $p['kode'] ?>">
                                        </div>
                                    </div>
                                     <div class="form-group">
										 
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="hak">Hak Pilih
                                        </label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
											<div class="togglebutton">
                                                <label>
                                                    <input type="checkbox" name="hak" <?php if($p['hak']==1){ echo "checked value='1'"; } else { echo "value='1'"; }  ?>>
                                                </label>
                                            </div>
                                        </div>
										  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tetap">Pemilih Tetap
                                        </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
											<div class="togglebutton">
                                                <label>
                                                    <input type="checkbox" name="tetap" <?php if($p['tetap']==1){ echo "checked value='1'"; } else { echo  "checked value='1'"; }  ?>> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input name="id" type="hidden" required="required" value="<?php echo $p['id'] ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                            <?php echo form_close(); ?>
                        </td>
                    </tr>



                    <?php } ?>
                </tbody>
            </table>
            
            
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

        <script src="<?php echo base_url(); ?>dist/js/jquery.dataTables.js"></script>
        
        <script>
        $(document).ready(function(){
            $('#examples').dataTable();
        });
        </script>

		<script src="<?php echo base_url(); ?>dist/js/autocomplete/jquery.autocomplete.js"></script>

		<script type='text/javascript'>
		var site = "<?php echo site_url();?>";
        $(function(){
            $('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/autocomplete/search',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
            });
        });	
		</script>