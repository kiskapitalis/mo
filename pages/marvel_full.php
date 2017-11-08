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
				<h4>Full Marvel</h4>
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="#">Research components</a>
					<span class="breadcrumb-item active">Full Marvel</span>
				</nav> <!-- /breadcrumb -->
			</div> <!-- /col -->
		</div> <!-- /row -->
		
		
		
		<!-- ////////// MARVEL //////////-->
		<div class="row">
		
		<!-- ////////// Headings //////////-->
		<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">        
			<div class="card">
				<div class="card-heading">
					<h1>FULL MARVEL</h1>
					<h4>Calculates energy levels from measured transitions</h4>
					<h5>You can manually change threshold limits</h5>
				</div> <!-- /card-heading -->
				<div class="card-body">
					<blockquote>
					<p>
					<label for="quantum"><strong>NQN</strong>: Number of quantum numbers representing an energy level:</label></br>
					<input type="text" name="quantum" id="quantum" class="full-width help disabled" title="quantum numbers" /></br></br>
					
					<label for="quantum"><strong>Threshold of change</strong>: change the uncertanty of the transitions automatically if the ratio less than: </label></br>
					<input type="text" name="thresholfofc" id="thresholfofc" class="full-width help" title="Threshold of change" value="1.1"/></br></br>
					
					<label for="quantum"><strong>Threshold of delete</strong>: delete the transitions automatically if the ratio greater than: </label></br>
					<input type="text" name="thresholfofd" id="thresholfofd" class="full-width help" title="Threshold of delete" value="10.0"/></br></br>
					
					<!-- ////////// Popover Right ////////// -->
					<button type="button" class="btn btn-info space-preview" data-html="true" data-container="body" data-toggle="popover" data-placement="right" 
						data-content="FIRST COLUMN: transition wavenumber in cm-1<br />SECOND COLUMN: uncertanity in cm-1<br />Next NQN columns: quantum numbers of the upper energy levels <br />Next NQN columns: quantum numbers of the lower energy levels <br />Last column: tag of the line"
						data-title="Marvel input">
						<i class="fa fa-info" aria-hidden="true"></i>  About Marvel input
					</button></br>
					
					<label for="textarea">MARVEL input:</label></br>
					
						<input id="FileUpload1" type='file' accept='text/plain' onchange='openFile(event)'><br/><br/>
						
					<button onclick="RunMARVEL();" class="btn btn-success space-preview">
						<i class="fa fa-check" aria-hidden="true"></i>Run MARVEL
						
					<!--<a href="#" onclick="RunMARVEL();" class="button">Run MARVEL</a>-->
					<button type="button" class="btn btn-primary space-preview" onclick="SaveJSON();">
						<i class="fa fa-cloud" aria-hidden="true"></i>  Graph representation
					</button>
					</p>
				</blockquote>
					<span id="output"></span>
				</div> <!-- /card-body -->
			</div> <!-- /card -->
		</div> <!-- /col -->           
		
		<!-- ////////// Display Headings //////////-->
		<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4" id="results">        
			<div class="card">
				<div class="card-heading">
					<h2>RESULTS:</h2>
				</div> <!-- /card-heading -->
				<div class="card-body" id="message">
				</div> <!-- /card-body -->
				<div class="card-body" id="badlines">
				</div> <!-- /card-body -->
				<div class="card-body" id="result">
				</div> <!-- /card-body -->
			</div> <!-- /card -->
		</div> <!-- /col -->        
		
		</div> <!-- /row -->
		
		<div class="row">
		
		<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4" id="details">        
			<div class="card">
				<div class="card-heading">
					<h2>Details:</h2>
				</div> <!-- /card-heading -->
				<div class="card-body">
				
				
				<blockquote>
					<h4>Download links:</h4>
					
					
						<a download="MARVELenergylevels.txt" id="downloadlink" class="redlink" style="display: none">Download Energy Levels</a>
						<p id="downloadnote" style="display: none">Note: the transition file contains the updated uncertaitnies (using the two thresholds value).</p>
						<a download="MARVELtransitions.txt" id="marvelTR" class="redlink" style="display: none">Download Transitions</a>
						<a download="Checktransitions.txt" id="checkTR" class="redlink" style="display: none">Download CheckTransitions</a>
						<br/>
						
		<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4">        
			<div class="card">
				<div class="card-heading">
					<h5>Basic nav tabs</h5>
					<p>Takes the basic nav from above and adds the .nav-tabs class to generate a tabbed interface.</p>
				</div> <!-- /card-heading -->
				<div class="card-body">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home" role="tab">Component</a>
						</li> <!-- /nav-item -->
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile" role="tab">Bad lines of largest component</a>
						</li> <!-- /nav-item -->
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#messages" role="tab">Energy levels of largest component</a>
						</li> <!-- /nav-item -->
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#settings" role="tab">Other components</a>
						</li> <!-- /nav-item -->
					</ul> <!-- /nav-tabs -->

					<!-- Tab panes -->
					<div class="tab-content">

						<div class="tab-pane fade show active" id="home" role="tabpanel">
							<div id="components"></div>
						</div> <!-- /tab-pane -->

						<div class="tab-pane fade" id="profile" role="tabpanel">
							<div id="badlines"></div>
						</div> <!-- /tab-pane -->

						<div class="tab-pane fade" id="messages" role="tabpanel">
							<<div id="result"></div>
						</div> <!-- /tab-pane -->

						<div class="tab-pane fade" id="settings" role="tabpanel">
							<div id="othercomp"></div>
						</div> <!-- /tab-pane -->

					</div> <!-- /tab-content -->

				</div> <!-- /card-body -->
			</div> <!-- /card -->
		</div> <!-- /col -->          
						
					
						
					
				</blockquote>
				</div> <!-- /card-body -->
			</div> <!-- /card -->
		
		</div> <!-- /row -->
		
		
	</div> <!-- /content -->
	
	
<!-- ////////// Run Marvel ////////// -->

	<script type="text/javascript" src="../js/marvel/jquery.min.js"></script>
	<script type="text/javascript" src="../js/marvel/jquery.common.min.js"></script>
	<script type="text/javascript" src="../js/marvel/graph.js"></script>
	<script type="text/javascript" src="../js/marvel/mo_full.js"></script>	
	
	 <script>
	
		document.getElementById("full").className = "collapse active";
		$("#results").hide();
		$("#details").hide();
		
		function SaveJSON() {
			if( supports_html5_storage() ){
				var data = document.getElementById("output").innerText;
				localStorage.setItem('transitions', JSON.stringify(data));
				
				var data2 = document.getElementById("quantum").value;
				localStorage.setItem('nqnumber', JSON.stringify(data2));
				
				var path = document.getElementById("FileUpload1").value;
				console.log(path);
				var filename = path.replace(/^.*\\/, "");
				console.log(filename);
				window.location = "graph.php?#" + filename;
			}
		}
		
		function supports_html5_storage() {
		  try {
			return 'localStorage' in window && window['localStorage'] !== null;
		  } catch(e){
			return false;
		  }
		}
		
		var openFile = function(event) {
			var input = event.target;
		
			var reader = new FileReader();
			reader.onload = function(){
				var text = reader.result;
		  
				var node = document.getElementById('output');
				node.innerText = text;			
			};
			reader.readAsText(input.files[0]);
		}
		
		function isInt(n){
			return Number(n) === n && n % 1 === 0;
		}
		
	

	 </script>
	

<!-- ////////// Right Sidebar ////////// -->
	<?php include "static/rightSidebar.php";?>

</div> <!-- /page -->

<!-- Core Plugins (necessary for Vega plugins)  -->
<script src="../js/app.min.js"></script>
<!-- DataTable script -->
<script type="text/javascript">
function table() {
"use strict";

	var table = $('.table_top_content');
	table.DataTable({
		"dom": '<<"" <"dataTable_top left col-xs col-sm-12 col-md-6 col-lg-6 col-xl-6 pl-0"i<"clear">> <"dataTable_top right col-xs col-sm-12 col-md-6 col-lg-6 col-xl-6 pr-0"f<"clear">> >rt<"bottom"p<"clear">>',
		"oLanguage": { "sSearch": "" } 
	});
}
</script>
<!-- Custom Scripts -->
<script src="../js/custom.min.js"></script>

</body>
</html>
