                <?php echo form_open('control/addPemilih', ' class="form-horizontal form-label-left"'); ?>    
                    <div class="modal fade tambahPemilih" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Tambah Pemilih</h4>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nama 
                                        </label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <input name="nama" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">NBA 
                                        </label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <input name="nba" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" >
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Asal 
                                        </label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                             <input name="asal" type="search" style="width:380px" id="first-name" required="required" class="form-control autocomplete asal col-md-12">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo form_close(); ?>
                
                <?php echo form_open_multipart('control/addFormatur', ' class="form-horizontal form-label-left"'); ?>    
                    <div class="modal fade tambahFormatur" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Tambah Formatur</h4>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nama 
                                        </label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <input name="nama" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">NBA 
                                        </label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <input name="nba" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" >
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Foto 
                                        </label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <input name="foto" type="file" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  multiple > 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Visi 
                                        </label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <input name="visi" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" placeholder=""> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Misi 
                                        </label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                             <textarea class="form-control" name="misi" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo form_close(); ?>
        
        <!-- PNotify -->
        <script type="text/javascript" src="<?php echo base_url(); ?>dist/js/notify/pnotify.core.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>dist/js/notify/pnotify.buttons.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>dist/js/notify/pnotify.nonblock.js"></script>

        
        <script>
            function successDataUpd(){
                new PNotify({
                    title: "Update Success !!!",
                    type: "success",
                });  
            };
            function successDataAdd(){
                new PNotify({
                    title: "Insert Success !!!",
                    type: "info",
                });  
            };
            function successDataDel(){
                new PNotify({
                    title: "Delete Success !!!",
                    type: "error",
                });  
            };

        </script>

        <script>
            <?php echo $this->session->flashdata('notif'); ?>
        </script>


		<script src="<?php echo base_url(); ?>dist/js/ripples.min.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/material.min.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/snackbar.min.js"></script>


        <script src="dist/js/jquery.nouislider.min.js"></script>
        <script>
            $(function() {
                $.material.init();
                $(".shor").noUiSlider({
                    start: 40,
                    connect: "lower",
                    range: {
                        min: 0,
                        max: 100
                    }
                });

                $(".svert").noUiSlider({
                    orientation: "vertical",
                    start: 40,
                    connect: "lower",
                    range: {
                        min: 0,
                        max: 100
                    }
                });
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

		

        </div>
    </body>
</html>