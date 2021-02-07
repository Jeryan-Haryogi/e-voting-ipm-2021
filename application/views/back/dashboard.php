<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="justify">
            <h1 class="page-header">Hasil</h1>
			
			<div class="col-lg-8">
				<table id="examples" class="table table-striped responsive-utilities">
                <thead>
                    <tr class="headings">
						<th class="col-lg-2">Suara</th>
						<th class="col-lg-2">Foto</th>
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
							<td class=" " align="center"><strong><?php echo $pi; ?></strong></td>
							<td>
								<img src="<?php echo site_url(); ?>/../dist/img/<?= $f['foto'] ?>" width="50%">
							</td>
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
			<div class="col-lg-4">
				<p>Selamat Datang !!! Electronic Voting Ikatan Pelajar Muhammadiyah adalah Sistem perhitungan Electronic Voting yang paling lengkap dalam lingkup Muhammadiyah. E-Voting ini dibuat langsung oleh kader Ikatan Pelajar Muhammadiyah, membuktikan bahwa IPM adalah generasi Kreatif yang Berkemajuan. Dan diharapkan dapat menjadi percontohan untuk organisasi otonom di segala lini khususnya dan Indonesia pada umumnya</p>
				 - Devlop -
				<hr>
				<div class="row">
					<div class="col-lg-5" align="center">
						<h1><?php echo $sementara; ?></h1>
						<div class='label label-primary'>Pemilih Sementara</div>
					</div>
					<div class="col-lg-4" align="center">
						<h1><?php echo $tetap; ?></h1>
						<div class='label label-primary'>Pemilih Tetap</div>
					</div>
					<div class="col-lg-3" align="center">
						<h1><?php echo $sah; ?></h1>
						<div class='label label-primary'>Suara Sah</div>
					</div>
				
				</div>
				
			</div>

           
           
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