<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="justify">
            <h1 class="page-header">Hasil Perhitungan</h1>
			<table id="examples" class="table table-striped responsive-utilities">
                <thead>
                    <tr class="headings">
						<th class="col-lg-1">Suara</th>
                        <th class="col-lg-3">Nama Calon Formatur</th>
                        
                        <th class="col-lg-8">Presentase</th>
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
							
							<?php } ?>
							<td class=" " align="center"><?php echo $pi; ?></td>
							<td class=" "><strong><?php echo $f['nama']; ?></strong></td>
							<td class=" ">
								<div class="progress progress-striped active">
									<div class="progress-bar" style="width:<?php echo 100/$total*$pi; ?>%" ></div>
								</div>
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