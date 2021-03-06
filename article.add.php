<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap Admin</title>
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
		<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

		<script src="lib/jquery-1.8.1.min.js" type="text/javascript"></script>

		<!-- Demo page code -->

		<style type="text/css">
			#line-chart {
				height:300px;
				width:800px;
				margin: 0px auto;
				margin-top: 1em;
			}
			.brand { font-family: georgia, serif; }
			.brand .first {
				color: #ccc;
				font-style: italic;
			}
			.brand .second {
				color: #fff;
				font-weight: bold;
			}
		</style>

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="../assets/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
	</head>

	<!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
		<!--[if IE 7 ]> <body class="ie ie7"> <![endif]-->
			<!--[if IE 8 ]> <body class="ie ie8"> <![endif]-->
				<!--[if IE 9 ]> <body class="ie ie9"> <![endif]-->
					<!--[if (gt IE 9)|!(IE)]><!--> 
					<body> 
						<!--<![endif]-->

						<div class="navbar">
							<div class="navbar-inner">
								<div class="container-fluid">
									<ul class="nav pull-right">

										<li id="fat-menu" class="dropdown">
										<a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-user"></i> Jack Smith
											<i class="icon-caret-down"></i>
										</a>

										<ul class="dropdown-menu">
											<li><a tabindex="-1" href="#">Settings</a></li>
											<li class="divider"></li>
											<li><a tabindex="-1" href="sign-in.html">Logout</a></li>
										</ul>
										</li>

									</ul>
									<a class="brand" href="index.html"><span class="first">Your</span> <span class="second">Company</span></a>
								</div>
							</div>
						</div>


						<div class="container-fluid">

							<div class="row-fluid">
								<div class="span3">
									<div class="sidebar-nav">
										<div class="nav-header" data-toggle="collapse" data-target="#dashboard-menu"><i class="icon-dashboard"></i>Dashboard</div>
										<ul id="dashboard-menu" class="nav nav-list collapse in">
											<li><a href="index.html">Home</a></li>
											<li ><a href="users.html">Sample List</a></li>
											<li><a href="user.html">Sample Item</a></li>
											<li class="active"><a href="user.html">Post One</a></li>
											<li ><a href="gallery.html">Gallery</a></li>
											<li ><a href="calendar.html">Calendar</a></li>
											<li ><a href="faq.html">Faq</a></li>
											<li ><a href="help.html">Help</a></li>

										</ul>
										<div class="nav-header" data-toggle="collapse" data-target="#accounts-menu"><i class="icon-briefcase"></i>Account<span class="label label-info">+10</span></div>
										<ul id="accounts-menu" class="nav nav-list collapse in">
											<li ><a href="sign-in.html">Sign In</a></li>
											<li ><a href="sign-up.html">Sign Up</a></li>
											<li ><a href="reset-password.html">Reset Password</a></li>
										</ul>

										<div class="nav-header" data-toggle="collapse" data-target="#settings-menu"><i class="icon-exclamation-sign"></i>Error Pages</div>
										<ul id="settings-menu" class="nav nav-list collapse in">
											<li ><a href="403.html">403 page</a></li>
											<li ><a href="404.html">404 page</a></li>
											<li ><a href="500.html">500 page</a></li>
											<li ><a href="503.html">503 page</a></li>
										</ul>

										<div class="nav-header" data-toggle="collapse" data-target="#legal-menu"><i class="icon-legal"></i>Legal</div>
										<ul id="legal-menu" class="nav nav-list collapse in">
											<li ><a href="privacy-policy.html">Privacy Policy</a></li>
											<li ><a href="terms-and-conditions.html">Terms and Conditions</a></li>
										</ul>
									</div>
								</div>
								<div class="span9">
									<h1 class="page-title">Post Blog</h1>
									<form action="article.handle.php" method="post">

										<div class="btn-toolbar">
											<input type="submit" value="Post :)" class="btn btn-primary">
											<input type="reset" value="Reset" class="btn btn-info">
										</div>

										<div class="well">
											<label>标题</label>
											<input name="title" type="text" value="" class="input-xlarge">
											<label>作者</label>
											<input name="author" type="text" value="" class="input-xlarge">
											<label>简介</label>
											<textarea id="" name="description" rows="3" style="width:100%"></textarea>
											<label>内容</label>
											<textarea id="" name="content" rows="18" style="width:100%"></textarea>
										</div>
									</form>
								</div>
							</div>

    
    <footer>
        <hr>
        
        <p class="pull-right">Collect from <a href="http://www.17sucai.com/" title="网页模板" target="_blank">网页模板</a></p>
        
        
        <p>&copy; 2012 <a href="#">Portnine</a></p>
    </footer>
    

    

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/bootstrap/js/bootstrap.js"></script>

  </body>
</html>


