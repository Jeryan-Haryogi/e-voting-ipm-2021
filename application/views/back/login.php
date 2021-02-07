<div class="row login">
    <div class="col-lg-offset-4 col-lg-4">
        <div class="bs-component form-horizontal" align="center">
            <img src="<?php echo base_url(); ?>/dist/img/logoipm2.png" class="logo"/>
            <?php echo $this->session->flashdata('login'); ?>
            <?php echo form_open('control/login'); ?>
                <div class="form-group">
                    <div class="col-lg-12" align="center">
                        
                        <label class="col-lg-4 control-label">Your Username</label>
                        <div class="col-lg-8">
                            <?php echo form_input($username); ?>
                        </div>
                        <label class="col-lg-4 control-label">Password</label>
                        <div class="col-lg-8">
                            <?php echo form_input($password); ?>
                        </div>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div> 
            <?php echo form_close(); ?>
        </div>
    </div>
</div>