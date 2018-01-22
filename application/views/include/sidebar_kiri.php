				<div class="static-sidebar-wrapper sidebar-default">
                    <div class="static-sidebar">
						<div class="sidebar">
							<?php // Menu menyesuaikan level, jika tidak sama maka ditutup dengan attribut "hidden"
							if($this->session->userdata('akses') !== '1')
							{
								$tampil_1 = 'hidden';
							}else
								$tampil_1 = '';

							if($this->session->userdata('akses') !== '2')
							{
								$tampil_2 = 'hidden';
							}else
								$tampil_2 = '';
							?>
							<div class="widget stay-on-collapse" id="widget-sidebar" <?php echo $tampil_1 ?>>
								<nav role="navigation" class="widget-body">
									<ul class="acc-menu">
										<div class="widget-heading"><span> </span></div>
										<li><a href="<?php echo base_url()?>petugas/input"><i class="fa fa-pencil"></i><span>Input Petugas</span></a></li>
										<li><a href="<?php echo base_url()?>petugas/daftar"><i class="fa fa-table"></i><span>Daftar Petugas</span></span></a></li>
									</ul>
								</nav>
							</div>
							<div class="widget stay-on-collapse" id="widget-sidebar" <?php echo $tampil_2 ?>>
								<nav role="navigation" class="widget-body">
									<ul class="acc-menu">
										<div class="widget-heading"><span> </span></div>
										<li><a href="<?php echo base_url()?>perizinan/input"><i class="fa fa-pencil"></i><span>Input Perizinan</span></a></li>
										<li><a href="<?php echo base_url()?>perizinan/daftar"><i class="fa fa-table"></i><span>Daftar Perizinan</span></span></a></li>
										<div class="widget-heading"><span> </span></div>
										<li><a href="<?php echo base_url()?>perizinan/notiftoday"><i class="ti ti-email"></i><span class="badge badge-primary"><?php echo $this->dataload->notiftoday(); ?></span><span>Email Hari ini</span></a></li>
										<li><a href="<?php echo base_url()?>perizinan/tigabulanlagi"><i class="ti ti-calendar"></i><span class="badge badge-success"><?php echo $this->dataload->tigabulanlagi(); ?></span><span>3 Bulan Lagi</span></a></li>
										<li><a href="<?php echo base_url()?>perizinan/satubulanlagi"><i class="ti ti-calendar"></i><span class="badge badge-warning"><?php echo $this->dataload->satubulanlagi(); ?></span><span>1 Bulan Lagi</span></a></li>
										<li><a href="<?php echo base_url()?>perizinan/satuminggulagi"><i class="ti ti-calendar"></i><span class="badge badge-orange"><?php echo $this->dataload->satuminggulagi(); ?></span><span>1 Minggu Lagi</span></a></li>
										<li><a href="<?php echo base_url()?>perizinan/deadline"><i class="ti ti-bell"></i><span class="badge badge-deeporange"><?php echo $this->dataload->deadline(); ?></span><span>Deadline Hari Ini</span></a></li>
									</ul>
								</nav>
							</div>
						</div>
                    </div>
                </div>
