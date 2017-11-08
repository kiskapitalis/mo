<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "static/head.php";?>
	<link href="../css/jquery.dataTables.css" rel="stylesheet">
</head>

<body class="style">

<!-- ////////// Preloader //////////-->
<div id="preloader"></div>

<!-- ////////// Header ////////// -->
	<?php include "static/header.php";?>

<!-- ////////// Page ////////// -->
	<div id="page">

<!-- ////////// Left Sidebar ////////// -->
	<?php include "static/leftSidebar.php";?>

	<!-- ////////// Content ////////// -->
	<div id="content">
	
		<!-- ////////// Page Title & Breadcrumbs //////////-->
		<div class="row">
			<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<h4>Components</h4>
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="#">Open sites</a>
					<span class="breadcrumb-item active">Components</span>
				</nav> <!-- /breadcrumb -->
			</div> <!-- /col -->
		</div> <!-- /row -->
		
		
		
		<!-- ////////// MARVEL //////////-->
	<div class="row">
	
	<!-- ////////// Headings //////////-->
	<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">        
		<div class="card">
			<div class="card-heading">
				<h2>Demos</h2>
				<h4>Showing marvel input files and running Marvel on them</h4>
			</div> <!-- /card-heading -->
			<div class="card-body">
				<blockquote>
				
							<!-- ////////// Popover Right ////////// -->
							<button type="button" class="btn btn-info space-preview" data-html="true" data-container="body" data-toggle="popover" data-placement="right" 
								data-content="<img src='../img/demo1.jpg' width='400' />" data-title="Simple network, no bad line"">
								<i class="fa fa-info" aria-hidden="true"></i>  Demo 1 network
							</button></br></br></br>
							
							<button type="button" class="btn btn-info space-preview" data-html="true" data-container="body" data-toggle="popover" data-placement="right" 
								data-content="<img src='../img/demo2.jpg' width='400' />" data-title="Simple network, one bad line"">
								<i class="fa fa-info" aria-hidden="true"></i>  Demo 2 network
							</button></br></br></br>
							
							<button type="button" class="btn btn-info space-preview" onclick="location.href='demo3.php';"">
								<i class="fa fa-info" aria-hidden="true"></i>  Go to demo 3
							</button>
							
			</blockquote>
					
			</div> <!-- /card-body -->
		</div> <!-- /card -->
	</div> <!-- /col -->           
	
	<!-- ////////// Display Headings //////////-->
	<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">        
		<div class="card">
			<div class="card-heading">
				<h2>Run Marvel</h2>
				<h4>Calculating energy levels from user input</h4>
			</div> <!-- /card-heading -->
				<div class="card-body">
					<div><strong>Input: </strong> from textarea or file input; it contains the wavenumber, the uncertanity, the quantum numbers and the tag of the line.</div></br>
					<div><strong>Method: </strong> by calculating the static energy levels, Marvel builds up a spectroscopic network. If there is more route to get from element A 
												to element B, the energy transition must be the same on the two routes. If not, than one of the transitions is badly measured.
												With enough transitions Marvel sign the bad data.</div></br>
					<div><strong>Output: </strong> Marvel gives back the Badlines (badly measured transitions)
													and the calculated energy levels.</div></br>
				</div> <!-- /card-body -->
		</div> <!-- /card -->
	</div> <!-- /col -->        
	
	</div> <!-- /row -->
	
	
	<div class="row">
	
	<!-- ////////// Headings //////////-->
	<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">        
		<div class="card">
			<div class="card-heading">
				<h2>Demos</h2>
				<h4>Showing marvel input files and running Marvel on them</h4>
			</div> <!-- /card-heading -->
			<div class="card-body">
				<blockquote>
				
							<!-- ////////// Popover Right ////////// -->
							<button type="button" class="btn btn-info space-preview" data-html="true" data-container="body" data-toggle="popover" data-placement="right" 
								data-content="<img src='../img/demo1.jpg' width='400' />" data-title="Simple network, no bad line"">
								<i class="fa fa-info" aria-hidden="true"></i>  Demo 1 network
							</button></br></br></br>
							
							<button type="button" class="btn btn-info space-preview" data-html="true" data-container="body" data-toggle="popover" data-placement="right" 
								data-content="<img src='../img/demo2.jpg' width='400' />" data-title="Simple network, one bad line"">
								<i class="fa fa-info" aria-hidden="true"></i>  Demo 2 network
							</button></br></br></br>
							
							<button type="button" class="btn btn-info space-preview" onclick="location.href='demo3.php';"">
								<i class="fa fa-info" aria-hidden="true"></i>  Go to demo 3
							</button>
							
			</blockquote>
					
			</div> <!-- /card-body -->
		</div> <!-- /card -->
	</div> <!-- /col -->           
	
	<!-- ////////// Display Headings //////////-->
	<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">        
		<div class="card">
			<div class="card-heading">
				<h2>Run Marvel</h2>
				<h4>Calculating energy levels from user input</h4>
			</div> <!-- /card-heading -->
				<div class="card-body">
					<div><strong>Input: </strong> from textarea or file input; it contains the wavenumber, the uncertanity, the quantum numbers and the tag of the line.</div></br>
					<div><strong>Method: </strong> by calculating the static energy levels, Marvel builds up a spectroscopic network. If there is more route to get from element A 
												to element B, the energy transition must be the same on the two routes. If not, than one of the transitions is badly measured.
												With enough transitions Marvel sign the bad data.</div></br>
					<div><strong>Output: </strong> Marvel gives back the Badlines (badly measured transitions)
													and the calculated energy levels.</div></br>
				</div> <!-- /card-body -->
		</div> <!-- /card -->
	</div> <!-- /col -->        
	
	</div> <!-- /row -->

		
	</div> <!-- /content -->

<!-- ////////// Right Sidebar ////////// -->
	<?php include "static/rightSidebar.php";?>

</div> <!-- /page -->

<!-- Core Plugins (necessary for Vega plugins)  -->
<script src="../js/app.min.js"></script>
<!-- Custom Scripts -->
<script src="../js/custom.min.js"></script>

<script>
	document.getElementById("component").className = "collapse active";
</script>

</body>
</html>
				
