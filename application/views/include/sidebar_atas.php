<header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">

	<div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
			</a>
		</span>
		
		<a class="navbar-brand" href="<?php echo base_url() ?>">AQUA NOTIF</a>

	</div><!-- logo-area -->

	<ul class="nav navbar-nav toolbar pull-right">
        <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="ti ti-fullscreen"></i></span></i></a>
        </li>

        <li class="dropdown toolbar-icon-bg hidden-xs">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="ti ti-email"></i></span><span class="badge badge-primary"><?php echo $this->dataload->notiftoday(); ?></span></a>
			<div class="dropdown-menu notifications arrow">
				<div class="topnav-dropdown-header">
					<span>Email Masuk</span>
				</div>
				<div class="scroll-pane">
					<ul class="media-list scroll-content">
					<?php $mini = $this->dataload->mini_notiftoday()->result();
				            foreach($mini as $e): ?>
						<li class="media notification-primary">
				            <a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-check"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><?php echo $e->nmdok ?></h4>
									<span class="notification-time"><?php echo $e->nodok; ?></span>
								</div>
							</a>
						</li>
					<?php endforeach; ?>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="#">See all messages</a>
				</div>
			</div>
		</li>
		
		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="ti ti-bell"></i></span><span class="badge badge-deeporange"><?php echo $this->dataload->deadline(); ?></span></a>
			<div class="dropdown-menu notifications arrow">
				<div class="topnav-dropdown-header">
					<span>Deadline</span>
				</div>
				<div class="scroll-pane">
					<ul class="media-list scroll-content">
					<?php $mini = $this->dataload->mini_deadline()->result();
				            foreach($mini as $e): ?>
						<li class="media notification-danger">
				            <a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-check"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading"><?php echo $e->nmdok ?></h4>
									<span class="notification-time"><?php echo $e->nodok; ?></span>
								</div>
							</a>
						</li>
					<?php endforeach; ?>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="<?php echo base_url()?>perizinan/deadline">Lihat Semua</a>
				</div>
			</div>
		</li>

		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="dropdown-toggle username" data-toggle="dropdown">
				 <img class="img-circle" src="<?php echo base_url() ?>uploads/<?php echo $this->session->userdata('session_foto');?>" alt="" onerror="this.src='<?php echo base_url() ?>assets/img/user.jpg'"/>
			</a>
			<ul class="dropdown-menu userinfo arrow">
				<li><a href="#"><i class="ti ti-user"></i><span><?php echo $this->session->userdata('session_nama');?></span></a></li>
				<li><a href="#/"><i class="ti ti-panel"></i><span><span class="badge badge-info">@<?php echo $this->session->userdata('session_username');?></span></span></a></li>
				<li><a href="#/"><i class="ti ti-stats-up"></i><span><?php echo $this->session->userdata('session_level');?></span></a></li>
				<li><a href="#/"><i class="ti ti-settings"></i><span>Settings</span></a></li>
				<li class="divider"></li>
				<li><a href="<?php echo base_url() ?>login/logout"><i class="ti ti-shift-right"></i><span>Log Out</span></a></li>
			</ul>
		</li>

	</ul>

</header>
