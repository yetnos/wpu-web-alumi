<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>EVENT</h2>
		</div>
		<?php if (isset($message)) {
    echo '<div class="alert bg-teal alert-dismissible" role="alert" id="flash-msg">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				'.$message.'
				</div>';
}?>
        <!-- Custom Content -->
		<div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
						Daftar Event dalam bulan ini
                            <small>Kami hanya menampilkan event kerja pada bulan ini, jika anda berminat silahkan membaca event ini lebih lanjut dan daftarkan diri anda sesuai dengan informasi yang ada.</small>
                        </h2>
                    </div>
                    <div class="body">
                    
                        <div class="row">
							<!-- halaman event -->
                            <?php foreach ($_get_event as $row):?>
							<div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url('assets/backend'); ?>/images/event-schedule.png">
                                    <div class="caption">
                                        <h3><?php echo htmlspecialchars($row->event_title, ENT_QUOTES, 'UTF-8'); ?></h3>
                                        <p>	
										<?php echo character_limiter($row->deskripsi, 100); ?>
                                        </p>
                                        <p>
												<?php echo anchor('event/read/'.$row->event_slug, 'Lebih Lanjut', 'class="btn btn-primary waves-effect waves-float"'); ?>
                                        </p>
                                    </div>
                                </div>
							</div>
							<?php endforeach; ?>
							<!-- halaman event -->                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Custom Content -->
	</div>
</section>