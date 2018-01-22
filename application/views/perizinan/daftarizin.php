                              <table id="gantibahasa" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama Dokumen</th>
                                    <th>No Dokumen</th>
                                    <th>Tgl Pengesahan</th>
                                    <th>Sampai Tgl</th>
                                    <th>Status</th>
                                    <th>Pilihan</th>
                                  </tr>
                                </thead>
                                <tbody>
								
              								  <?php 
              								  $no=1;
              								  foreach ($perizinan as $d):
              								  ?>
								  
                                  <tr class="odd gradeX">
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $d->nmdok ?></td>
                                    <td><?php echo $d->nodok ?></td>
                                    <td align="right"><?php echo dataload::tgl_indonesia($d->tglsah) ?></td>
                                    <td align="right"><?php echo dataload::tgl_indonesia($d->sampaitgl) ?></td>
                                    <td><?php echo $d->status ?></td>
                  									<td>
                  									<div class="btn-group">
                                        <?php echo anchor('perizinan/detail/'.dataload::tambahan_link().md5($d->idiz),'<button type="button" class="btn btn-success-alt"><i class="ti ti-zoom-in"></i></button>')?>
                                        <?php echo anchor('perizinan/edit/'.dataload::tambahan_link().md5($d->idiz),'<button type="button" class="btn btn-primary-alt"><i class="ti ti-pencil-alt"></i></button>')?>
                                        <?php echo anchor('perizinan/hapus/'.dataload::tambahan_link().md5($d->idiz),'<button type="button" class="btn btn-danger-alt"><i class="ti ti-trash"></i></button>',array('onclick' => "return confirm('Apakah Anda yakin akan menghapus data $d->nmdok ini?')"))?>
                                    </div>
									                  </td>
                                  </tr>
								                <?php endforeach; ?>
                                </tbody>
                              </table>
