												<form method="post" action="<?php echo base_url()?>perizinan/create" enctype="multipart/form-data" class="form-horizontal row-border">
              											<div class="form-group">
              												<label class="col-sm-2 control-label">Kode Perizinan</label>
              												<div class="col-sm-2">
              													<input type="text" name="idiz" value="<?php echo $idbaru; ?>" class="form-control" readonly>
              												</div>
              											</div>
												       <div class="form-group">
              												<label class="col-sm-2 control-label">Nama Dokumen*</label>
              												<div class="col-sm-8">
              													<input type="text" name="nmdok" value="" class="form-control" maxlength="60" required autofocus>
              												</div>
              											</div>
													<div class="form-group">
              												<label class="col-sm-2 control-label">Nomor Dokumen*</label>
              												<div class="col-sm-4">
              													<input type="text" name="nodok" value="" class="form-control" maxlength="20" required autofocus>
              												</div>
              											</div>
													<div class="form-group">
              												<label class="col-sm-2 control-label">Disahkan Oleh*</label>
              												<div class="col-sm-8">
              													<input type="text" name="pengesah" value="" class="form-control" maxlength="100" required autofocus>
              												</div>
              											</div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label">Tanggal Pengesahan*</label>
                                                                                                  <div class="col-sm-4">
                                                                                                         <div class="input-group date">
                                                                                                                <span class="input-group-addon"><i class="ti ti-calendar"></i></span>
                                                                                                                <input type="text" name="tglsah" class="form-control" id="datepicker" data-date-format='yyyy-mm-dd' required autofocus>
                                                                                                         </div>
                                                                                                  </div>
                                                                                           </div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label">Lamanya</label>
                                                                                                  <div class="col-sm-3">
                                                                                                         <input type="text" name="lamanya" value="" class="form-control" maxlength="10">
                                                                                                  </div>
                                                                                           </div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label">Sampai Tanggal*</label>
                                                                                                  <div class="col-sm-4">
                                                                                                         <div class="input-group date" id="datepicker-startview" data-date-format='yyyy-mm-dd'>
                                                                                                                <span class="input-group-addon"><i class="ti ti-calendar"></i></span>
                                                                                                                <input type="text" name="sampaitgl" class="form-control" required autofocus>
                                                                                                         </div>
                                                                                                  </div>
                                                                                           </div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label">Status*</label>
                                                                                                  <div class="col-sm-4">
                                                                                                         <div class="radio block"><label><input type="radio" name="status" value="Asli" required autofocus checked> Asli</label></div>
                                                                                                         <div class="radio block"><label><input type="radio" name="status" value="Copy" required autofocus> Copy</label></div>
                                                                                                  </div>
                                                                                           </div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label">Keterangan</label>
                                                                                                  <div class="col-sm-8"><textarea name="keterangan" cols="50" rows="4" class="form-control"></textarea></div>
                                                                                           </div>
                                                                                           <div class="form-group">
                                                                                                  <label class="col-sm-2 control-label alert-danger">*) Wajib di isi.</label>
                                                                                           </div>
              											<div class="panel-footer">
              												<div class="row">
              													<div class="col-sm-8 col-sm-offset-2">
              														<button type="submit" class="btn-primary btn">Simpan</button>
              														<button type="reset" class="btn-danger btn">Batal</button>
              													</div>
              												</div>
              											</div>
              										</form>

