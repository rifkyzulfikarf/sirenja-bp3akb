<!--header start-->
<header class="header white-bg-transparent">
	<div class="sidebar-toggle-box">
		<div data-original-title="" data-placement="right" class="fa fa-bars tooltips"></div>
	</div>
	
	<!--logo start-->
	<a href="./" class="logo" >SI<span>RENJA</span></a>
	<!--logo end-->
	
	<div class="nav notify-row" id="top_menu">
		<!--  notification start -->
		<ul class="nav top-menu"></ul>
	</div>
	<div class="top-nav ">
		<ul class="nav pull-right top-menu">
			<!-- user login dropdown start-->
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<?php if ($_SESSION['en-jk'] == "L") { echo "<img alt='' src='img/avatar-male.jpg'>"; } else { echo "<img alt='' src='img/avatar-female.jpg'>"; } ?>
					<span class="username">&nbsp;<?php echo $_SESSION['en-nama'] ?></span>
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu extended logout">
					<div class="log-arrow-up"></div>
					<li><a data-toggle="modal" href="#modal-sign-out"><i class="fa fa-key"></i> Log Out</a></li>
				</ul>
			</li>
			<!-- user login dropdown end -->
		</ul>
	</div>
</header>
<!--header end-->