<!-- begin #header -->
<div id="header" class="header navbar navbar-default navbar-fixed-top">
	<!-- begin container-fluid -->
	<div class="container-fluid">
		<!-- begin mobile sidebar expand / collapse button -->
		<div class="navbar-header">
			<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> WEB ADMUM</a>
			<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<!-- end mobile sidebar expand / collapse button -->

		<!-- begin header navigation right -->
		<ul class="nav navbar-nav navbar-right">
			<li>
				<form class="navbar-form full-width">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter keyword" />
						<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</li>
			<li class="dropdown">
				<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
					<i class="fa fa-bell-o"></i>
					<span class="label">3</span>
				</a>
				<ul class="dropdown-menu media-list pull-right animated fadeInDown">
					<li class="dropdown-header">Notifications (3)</li>
					<li class="media">
						<a href="javascript:;">
							<div class="media-left"><i class="fa fa-users media-object bg-red"></i></div>
							<div class="media-body">
								<h6 class="media-heading">Pegawai Pensiun Tahun Ini</h6>
								<div class="text-muted f-s-11">3 minutes ago</div>
							</div>
						</a>
					</li>
					<li class="media">
						<a href="javascript:;">
							<div class="media-left"><i class="fa fa-user media-object bg-green"></i></div>
							<div class="media-body">
								<h6 class="media-heading"> Pegawai Baru Ditambahkan</h6>
								<div class="text-muted f-s-11">1 hour ago</div>
							</div>
						</a>
					</li>
					<li class="media">
						<a href="javascript:;">
							<div class="media-left"><i class="fa fa-briefcase media-object bg-blue"></i></div>
							<div class="media-body">
								<h6 class="media-heading"> Data Diklat Ditambahkan</h6>
								<div class="text-muted f-s-11">2 hour ago</div>
							</div>
						</a>
					</li>
					<li class="dropdown-footer text-center">
						<a href="javascript:;">View more</a>
					</li>
				</ul>
			</li>
			<li class="dropdown navbar-user">
				<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
					<img src="/admumpln/assets/img/user-13.jpg" alt="" />
					<span class="hidden-xs"><?php echo $admumUName; ?></span> <b class="caret"></b>
				</a>
				<ul class="dropdown-menu animated fadeInLeft">
					<li class="arrow"></li>
					<li><a href="javascript:;">Edit Profile</a></li>
					<li class="divider"></li>
					<li><a href="/admumpln/logout/">Log Out</a></li>
				</ul>
			</li>
		</ul>
		<!-- end header navigation right -->
	</div>
	<!-- end container-fluid -->
</div>
<!-- end #header -->
