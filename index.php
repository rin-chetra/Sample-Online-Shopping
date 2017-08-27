<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RCT Shop</title>
	<!-- Bootstrap minified CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"</script>
	<script scr="main.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">RCT Shop</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
				<li style="width: 300px;left: 10px;top: 10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top: 10px;left: 20px;"><input type="submit" class="btn btn-success" id="search_btn"></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"  class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Card<span class="badge">0</span></a>
				<div class="dropdown-menu" style="width: 400px;">
				<div class="panel panel-success">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-3">SI.No</div>
							<div class="col-md-3">Product Image</div>
							<div class="col-md-3">Product Name</div>
							<div class="col-md-3">Price in $.</div>
						</div>
					</div>
					<div class="panel-body"></div>
					<div class="panel-footer"></div>
				</div>
				</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> SignIn</a>
					<ul class="dropdown-menu">
						<div style="width: 300px;">
							<div class="panel panel-primary">
							<div class="panel-heading">Login</div>
							<div class="panel-heading">
							<label for="email">Email</label>
							<input type="email"  class="form-control" id="email" required/>
							<label for="email">Password</label>
							<input type="password" class="form-control" id="password" required/>
							<p><br/></p>
							<a href="#" style="color: white; list-style: none;">Forgeted Password</a><input type="submit" class="btn btn-success" style="float: right;" id="login" value="Login">
						</div>
						<div class="panel-footer" id="e_msg"></div>
					</ul>
				</li>
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
			</ul>
		</div>
	</nav>
	<p><br/></p>
	<p><br/></p>	
	<p><br/></p>	
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
			<!--<div id="get_category">
			</div>-->
			<div class="nav nav-pills-stacked">
				<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div>
				<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Band</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div>
			</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-info">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="img/Samsung Gaxy7.jpg" style="width: 150px; height: 90px;"/>
								</div>
								<div class="panel-heading">$.300.00
									<button style="float: right;" class="btn btn-danger btn-xs">AddToCard</button>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">&copy; 2017</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>