<?php
include("Connect.php");
// include("includes/layouts/header.php");
session_start();
if (isset($_SESSION['email'])   &&  isset($_SESSION['id'])) {
  // code...
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
@import "https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/dashboard.scss";
/* $bg: #1b241;
$light-text: #738297;
$dark-text: #273142;
$light-bg: #313D4F; */

// global stuff
body {
	background-color:#1B2410;
	color: #202020;
	font-family: "Montserrat", "Helvetica", "Open Sans", "Arial";
	font-size: 13px;
}

a:hover {
	text-decoration: none;
}

p,
figure {
	margin: 0;
	padding: 0;
}

@mixin clear() {
	&:before,
	&:after {
		content: " ";
		display: table;
	}

	&:after {
		clear: both;
	}
}

.navbar {
	background-color: #1B2410;
}

.sidebar {
	background-color:#1B2410;
	box-shadow: none;

	.nav-link {
		border-left: 5px solid transparent;
		color: #93A3B9;
		padding: .5rem .75rem;

		&:hover {
			color: white;
		}

		&.active {
			border-left: 5px solid #93A3B9;
			color: white;
		}
	}

	.zmdi {
		display: inline-block;
		font-size: 1.35rem;
		margin-right: 5px;
		min-width: 25px;
	}
}

.card-list {
	@include clear();
	width: 100%;
}

.card {
	border-radius: 8px;
	color: white;
	padding: 10px;
	position: relative;

	.zmdi {
		color: white;
		font-size: 28px;
		opacity: 0.3;
		position: absolute;
		right: 13px;
		top: 13px;
	}

	.stat {
		border-top: 1px solid rgba(255, 255, 255, 0.3);
		font-size: 8px;
		margin-top: 25px;
		padding: 10px 10px 0;
		text-transform: uppercase;
	}

	.title {
		display: inline-block;
		font-size: 8px;
		padding: 10px 10px 0;
		text-transform: uppercase;
	}

	.value {
		font-size: 28px;
		padding: 0 10px;
	}

	&.blue {
		background-color: #2298F1;
	}

	&.green {
		background-color: #66B92E;
	}

	&.orange {
		background-color: #DA932C;
	}

	&.red {
		background-color: #D65B4A;
	}
}

.projects {
	background-color: #222B3A;
	border: 1px solid #414C5C;
	overflow-x: auto;
	width: 100%;

	&-inner {
		border-radius: 4px;
	}
}

.projects-header {
	color: white;
	padding: 22px;

	.count,
	.title {
		display: inline-block;
	}

	.count {
		color: #7D8DA3;
	}

	.zmdi {
		cursor: pointer;
		float: right;
		font-size: 16px;
		margin: 5px 0;
	}

	.title {
		font-size: 21px;

		+ .count {
			margin-left: 5px;
		}
	}
}

.projects-table {
	background: #273142;
	width: 100%;

	td,
	th {
		color: white;
		padding: 10px 22px;
		vertical-align: middle;
	}

	td p {
		font-size: 12px;

		&:last-of-type {
			color: #93A3B9;
			font-size: 11px;
		}
	}

	th {
		background-color: #414C5C;
	}

	tr {
		&:hover {
			background-color: lighten(#222B3A, 5%);
		}

		&:not(:last-of-type) {
			border-bottom: 1px solid #414C5C;
		}
	}

	.member {
		figure,
		.member-info {
			display: inline-block;
			vertical-align: top;
		}

		figure + .member-info {
			margin-left: 7px;
		}

		img {
			border-radius: 50%;
			height: 32px;
			width: 32px;
		}
	}

	.status > form {
		float: right;
	}

	.status-text {
		display: inline-block;
		font-size: 12px;
		margin: 11px 0;
		padding-left: 20px;
		position: relative;

		&:before {
			border: 3px solid;
			border-radius: 50%;
			content: "";
			height: 14px;
			left: 0;
			position: absolute;
			top: 1px;
			width: 14px;
		}

		&.status-blue:before {
			border-color: #1E94EE;
		}

		&.status-green:before {
			border-color: #66BB2D;
		}

		&.status-orange:before {
			border-color: #D45C4C;
		}

		&.status-red:before {
			border-color: #D45C4C;
		}
	}
}
// selectric plugin styling
.selectric {
	background-color: transparent;
	border-color: #3F4A59;
	border-radius: 4px;
	.label {
		color: #3F4A59;
		line-height: 34px;
		margin-right: 10px;
		text-align: left;
	}
	&-wrapper {
		float: right;
		width: 150px;
	}
}
// charts
.chart {
	border-radius: 3px;
	// box-shadow: 0 0 10px -3px black;
	border: 1px solid #3F4A59;
	color: white;
	padding: 10px;
	position: relative;
	text-align: center;

	canvas {
		height: 400px;
		margin: 20px 0;
		width: 100%;
	}

	.actions {
		margin: 15px;
		position: absolute;
		right: 0;
		top: 0;

		span {
			cursor: pointer;
			display: inline-block;
			font-size: 20px;
			margin: 5px;
			padding: 4px;
		}

		.btn-link {
			color: white;

			i {
			    font-size: 1.75rem;
			}
		}
	}

	.title {
		font-size: 18px;
		margin: 0;
		padding: 15px 0 5px;
		+ .tagline {
			margin-top: 10px;
		}
	}

	.tagline {
		font-size: 12px;
	}
}

.danger-item {
	border-left: 4px solid #AA4E44;
}

.zmdi {
	line-height: 1;
	vertical-align: middle;
}

</style>
   </head>
   <body>
     <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0">
	<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="home.php">E-FEEDS</a>
	<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
	<ul class="navbar-nav px-3">
		<li class="nav-item text-nowrap">
			<a class="nav-link" href="logout.php">Sign out</a>
		</li>
	</ul>
</nav>
<div class="container-fluid">
	<div class="row">
		<nav class="col-md-2 d-none d-md-block sidebar">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link active" href="#">
                  <i class="zmdi zmdi-widgets"></i>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="orders.php">
                  <i class="zmdi zmdi-file-text"></i>
                  Orders
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="products2.php">
                  <i class="zmdi zmdi-shopping-cart"></i>
                  Products
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="customers.php">
                  <i class="zmdi zmdi-accounts"></i>
                  Customers
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-chart"></i>
                  Reports
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-layers"></i>
                  Integrations
                </a>
					</li>
				</ul>

				<h6 class="sidebar-heading d-flex justify-content-between align-items-center pl-3 mt-4 mb-1 text-muted">
					<span>Saved reports</span>
					<a class="d-flex align-items-center text-muted" href="#">
						<i class="zmdi zmdi-plus-circle-o"></i>
					</a>
				</h6>
				<ul class="nav flex-column mb-2">
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-file-text"></i>
                  Current month
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-file-text"></i>
                  Last quarter
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-file-text"></i>
                  Social engagement
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-file-text"></i>
                  Year-end sale
                </a>
					</li>
				</ul>
			</div>
		</nav>
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 my-3">


		</main>
	</div>
</div>
   </body>
 </html>

<?php
// include("includes/layouts/footer.php");
?>
 <?php
}else {
  header("Location:Login.php");
 }?>
