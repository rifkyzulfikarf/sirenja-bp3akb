<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Rifky Zulfikar">
    <meta name="keyword" content="Sistem Informasi Perencanaan Dan Kinerja Dinas BP3AKB Provinsi Jateng">
    <link rel="shortcut icon" href="../../../img/favicon.png">

    <title>Sistem Informasi Perencanaan Dan Kinerja Dinas BP3AKB Provinsi Jateng</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../../../css/style.css" rel="stylesheet">
    <link href="../../../css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">
    <div class="container">
		<div class="text-center" id="spinner"><i class="fa fa-spinner fa-spin fa-5x"></i></div>
		<div id="form-signin">
			<form class="form-signin" action="sign-in.php" method="POST">
				<h2 class="form-signin-heading">SIRENJA - BP3AKB</h2>
				<div class="login-wrap">
					<input type="text" class="form-control" name="username" placeholder="User ID" autofocus>
					<input type="password" class="form-control" name="password" placeholder="Password">
					<button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
				</div>
			</form>
		</div>
	</div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../../../js/jquery.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$("#spinner").fadeOut("slow");
		});
	</script>
</body>
</html>
