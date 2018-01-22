												<?php foreach($perizinan as $e): ?>
                                                                                    <form method="post" action="<?php echo base_url()?>perizinan/update" enctype="multipart/form-data" class="form-horizontal row-border">
              											<div class="form-group">
              												<label class="col-sm-2 control-label">Kode Perizinan</label>
              												<div class="col-sm-2">
              													<p class="form-control"><?php echo $e->idiz ?></p>
              												</div>
              											</div>
												       <div class="form-group">
              												<label class="col-sm-2 control-label">Nama Dokumen</label>
              												<div class="col-sm-8">
                                                                                                         <p class="form-control"><?php echo $e->nmdok ?></p>
              												</div>
              											</div>
													<div class="form-group">
              												<label class="col-sm-2 control-label">Nomor Dokumen</label>
              												<div class="col-sm-4">
                                                                                                         <p class="form-control"><?php echo $e->nodok ?></p>
              												</div>
              											</div>
													<div class="form-group">
              												<label class="col-sm-2 control-label">Disahkan Oleh</label>
              												<div class="col-sm-8">
                                                                                                         <p class="form-control"><?php echo $e->pengesah ?></p>
              												</div>
              											</div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label">Tanggal Pengesahan</label>
                                                                                                  <div class="col-sm-4">
                                                                                                         <p class="form-control"><?php echo dataload::tgl_indonesia($e->tglsah) ?></p>
                                                                                                  </div>
                                                                                           </div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label">Lamanya</label>
                                                                                                  <div class="col-sm-4">
                                                                                                         <p class="form-control"><?php echo $e->lamanya ?></p>
                                                                                                  </div>
                                                                                           </div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label">Sampai Tanggal</label>
                                                                                                  <div class="col-sm-4">
                                                                                                         <p class="form-control"><?php echo dataload::tgl_indonesia($e->sampaitgl) ?></p>
                                                                                                  </div>
                                                                                           </div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label">Status</label>
                                                                                                  <div class="col-sm-4">
                                                                                                         <p class="form-control"><?php echo $e->status ?></p>
                                                                                                  </div>
                                                                                           </div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label">Keterangan</label>
                                                                                                  <div class="col-sm-8"><textarea name="keterangan" cols="50" rows="4" class="form-control" readonly><?php echo $e->keterangan ?></textarea></div>
                                                                                           </div>
              											<div class="panel-footer">
              												<div class="row">
              													<div class="col-sm-8 col-sm-offset-2">
                                                                                                                <?php echo anchor('perizinan/edit/'.dataload::tambahan_link().md5($e->idiz),'<button type="button" class="btn-primary btn"><i class="ti ti-pencil-alt"></i> Edit</button>')?>
              													</div>
              												</div>
              											</div>
              										</form>
                                                                                    <?php endforeach; ?>

