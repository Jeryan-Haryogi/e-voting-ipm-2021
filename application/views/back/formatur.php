<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="justify">
            <h1 class="page-header">Daftar Calon Formatur</h1>

            <table id="examples" class="table table-striped responsive-utilities">
                <thead>
                    <tr class="headings">
                        <th>Nama</th>
                        <th>NBA</th>
                        <th class=" no-link last"><span class="nobr">Action</span>
                        </th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach($formatur->result_array() as $f) { ?>
                    <tr class="even pointer">
                        <td class=" "><?php echo $f['nama']; ?></td>
                        <td class=" "><?php echo $f['nba']; ?></td>
                        <td class=" last" >
                            <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $f['id'] ?>"><div class='label label-success'><i class="fa fa-edit fa-fw"></i> Edit</div></a>
                            <a href="<?php echo base_url(); ?>index.php/control/delFormatur/<?php echo $f['id'] ?>" onClick='return confirm("Anda yakin ingin menghapus \"<?php echo $f['nama'] ?> \" ?")'><div class='label label-danger'><i class="fa fa-trash fa-fw"></i> Hapus</div></a> 
                            <?php echo form_open_multipart('control/updFormatur', ' class="form-horizontal form-label-left"'); ?>
                            <div class="modal fade bs-example-modal-lg<?php echo $f['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Formatur</h4>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nama 
                                        </label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <input name="nama" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $f['nama'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">NBA 
                                        </label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <input name="nba" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $f['nba'] ?>">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Foto 
                                        </label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <input name="foto" type="file" id="first-name" class="form-control col-md-7 col-xs-12"  multiple > 
                                        </div>
                                    </div>
                                    <input name="id" type="hidden" required="required" value="<?php echo $f['id'] ?>">
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
        $(document).ready(function() {
            $('#examples').dataTable();
        } );

        </script>