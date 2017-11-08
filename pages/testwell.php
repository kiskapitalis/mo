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
				<h4>Testwell</h4>
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="#">Research components</a>
					<a class="breadcrumb-item" href="#">Tests</a>
					<span class="breadcrumb-item active">Testwell</span>
				</nav> <!-- /breadcrumb -->
			</div> <!-- /col -->
		</div> <!-- /row -->
		
		
		
		<!-- ////////// MARVEL //////////-->
		<div class="row">
		
		<!-- ////////// Headings //////////-->
		<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">        
			<div class="card">
				<div class="card-heading">
					<h1>TESTWELL</h1>
					<h4>Universal test for Marvel outputs</h4>
				</div> <!-- /card-heading -->
				<div class="card-body">
					<blockquote>	
				
					<p>
					<label for="quantum"><strong>NQN</strong>: Number of quantum numbers representing an energy level</label></br>
					<input type="text" name="quantum" id="quantum" class="full-width help disabled" title="quantum numbers" /></br></br>
					
					<!-- ////////// Popover Right ////////// -->
					<button type="button" class="btn btn-info space-preview" data-html="true" data-container="body" data-toggle="popover" data-placement="right" 
						data-content="FIRST NQN COLUMN: assignation of the energy level<br />NEXT COLUMN: Energy value in cm-1<br />LAST BUT ONE: Uncertanity in cm-1<br />LAST COLUMN: Tag of the line"
						data-title="Marvel output">
						<i class="fa fa-info" aria-hidden="true"></i>  About Marvel output
					</button></br>
					
					<label for="textarea">MARVEL output:</label></br>
					
						<input id="FileUpload1" type='file' accept='text/plain' onchange='openFile(event)'><br/><br/>
						
					<button onclick="drawTABLE();" class="btn btn-success space-preview">
						<i class="fa fa-check" aria-hidden="true"></i>draw TABLE
						<!--<a href="#" onclick="RunMARVEL();" class="button">Run MARVEL</a>-->
					</p>
				</blockquote>
				</div> <!-- /card-body -->
			</div> <!-- /card -->
		</div> <!-- /col -->           
		
		<!-- ////////// Display Headings //////////-->
		<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4" id="results">        
			<div class="card">
				<div class="card-heading">
					<h2>INFORMATIONS:</h2>
				</div> <!-- /card-heading -->
				<div class="card-body" id="message">
					You should add something here!
				</div> <!-- /card-body -->
				<div class="card-body" id="badlines">
				</div> <!-- /card-body -->
				<div class="card-body" id="result">
				</div> <!-- /card-body -->
			</div> <!-- /card -->
		</div> <!-- /col -->       
		
		</div> <!-- /row -->
	
	<div> <!-- /row -->
		<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4" id="details">        
			<div class="card">
				<div class="card-heading">
					<h2>DATA:</h2>
				</div> <!-- /card-heading -->
				<div class="card-body" id="output">
				</div> <!-- /card-body -->
				<div class="card-body" id="button">
				</div> <!-- /card-body -->
				<div class="card-body" id="container">
				</div> <!-- /card-body -->
			</div> <!-- /card -->
		</div> <!-- /col -->  
	</div> <!-- /row -->
		
		
		</div> <!-- /content -->
	
	
<!-- ////////// Run Marvel ////////// -->

	<script type="text/javascript" src="../js/marvel/jquery.min.js"></script>
	<script type="text/javascript" src="../js/marvel/jquery.common.min.js"></script>
	<script type="text/javascript" src="../js/marvel/graph.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		
		
	 <script>
	 
	 $("#details").hide();
	 
	var openFile = function(event) {
	
		document.getElementById("output").innerHTML='<div align="center" class="spinner primary-spinner"></div>';
		
		var input = event.target;

		var reader = new FileReader();
		reader.onload = function(){
			$( "#output" ).show();
			
			textus = reader.result;
			
			var node = document.getElementById('output');
			node.innerText = textus;
			textus = node.innerText;
			node.innerText = "";
			
			
			
		};
		reader.readAsText(input.files[0]);
	}

	
	var textus = ""; //marci.js/openfile kitölti
	
	var nbass;

function drawTABLE(){
	
	$("#details").show();
	
	nbass = adatBe("quantum", "NQN number");
	nbass = parseInt(nbass);
	var text = textus;
	var res = text.split("\n");
	var nblines = res.length;
	nblines = parseInt(nblines);
		console.log(nblines);
	var output = '<h3>Content of your file:</h3><table id="basic_table2" class="table_top_content table table-bordered table-responsive table-striped"><thead>';
	for(var i = 1; i <= nbass; i++)
		output +='<th><input type="text"  size="'+ 12 +'" id="' + i + 'coloum" /></th>';
	output +='</thead>';
	for (i = 0; i < nblines; i++) { 
		intext = res[i].split(/\s+/g);
		console.log(intext);
		if(intext == ""){
			if(i == 0)
				continue;
			else
				break;
		}
		output +='<tr>';
		for(var j = 0; j < nbass; j++)
			output += "<td>"+intext[j]+"</td>";
		output +='</tr>';
	}
	document.getElementById("output").innerHTML=output;
	var button ='</br></br><button onclick="RunTESTWELL();" class="btn btn-success space-preview"><i class="fa fa-check" aria-hidden="true"></i>Run TESTWELL';
	document.getElementById("button").innerHTML=button;
	
	table();
			
}

function RunTESTWELL(){
	var xTengely = null;
	console.log("RUN"+xTengely);
	
	var minimumok = [];
	var maximumok = [];
	xTengely = szelsoertekek(minimumok, maximumok);
	console.log(minimumok, maximumok);

	if(xTengely != null){
		var Transitions = [];
		selection(Transitions, minimumok, maximumok);
		grafikon(Transitions, xTengely, nbass);
	}
}



function szelsoertekek(minimumok, maximumok){
	var xTengely;
	for(var i = 0; i < nbass; i++){
		var tmp = document.getElementById((i+1) + 'coloum').value;
		if(tmp == ""){
			if(xTengely == null){
				xTengely = i;
				minimumok[i] = null;
				maximumok[i] = null;
				continue;}
			else{
				warning("There are too many blank spaces!");
				return null;}
		}
				
		var dot = tmp.search("-");
		
		if(dot == -1){
			tmp = check(tmp, "Input of " + (i+1) + ". coloumn");
				if(tmp == -1){
					warning((i+1) + ". coloumn must be an integer number!");
					return null;}
				else{
					minimumok[i] = tmp;
					maximumok[i] = tmp;
				}
		}
		else{
			var res = tmp.split("-");
				minimumok[i] = check(res[0], "Input of " + i + ". coloumn");
				maximumok[i] = check(res[1], "Input of " + i + ". coloumn");
					if(minimumok[i] == -1 || maximumok[i] == -1){
						return null;
					}
		}
			
	}
	return xTengely;
}

function selection(Transitions, minimumok, maximumok){
	
	var text = textus;
	var res = text.split("\n");
	var nblines = res.length;
	nblines = parseInt(nblines);
	console.log(nblines);
	
	
		for (var i = 0; i < nblines; i++) { 

			intext = res[i].split(/\s+/g);
			for(var j = 0; j < nbass; j++)
				intext[j] = parseInt(intext[j]);
			intext[nbass] = parseFloat(intext[nbass]);
			
			var ize = checkRow(intext, minimumok, maximumok);
			if(ize != null)
				Transitions.push(ize);
			}
		console.log(Transitions)
}
	
function checkRow(intext, minimumok, maximumok){
	var i = 0;
	while(i < nbass-1 && ((intext[i] >= minimumok[i] && intext[i] <= maximumok[i]) || maximumok[i] == null)){
		i++;}
	if(!(i < nbass-1))
		return intext;
	else
		return null;		
}


function grafikon(Transitions, xTengely, nbass){
	var graf = []
		for (var i = 0; i < Transitions.length; i++){
			var Transition = Transitions[i];
			var tmp = [Transition[xTengely], Transition[nbass]]
			graf.push(tmp);
		}
	console.log(graf);
			


		
		Highcharts.chart('container', {
		
			chart: {
				type: 'scatter',
				zoomType: 'xy'
			},

			title: {
				text: 'TESTWELL'
			},

			subtitle: {
				text: 'Source: your file'
			},

			yAxis: {
				title: {
					text: 'Quantum number'
				}
			},
			xAxis: {
				title: {
					text: 'Energy value'
				}
			},
			legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle'
			},

			plotOptions: {
				series: {
					pointStart: 0
				}
			},

			series: [{
				name: 'graf',
				data: graf
			}]
		});
}




function warning(szoveg)
{
	$( "#message" ).prepend( '<div class="alert alert-warning fade show" role="alert"><div class="alert-icon"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>'+
	'<div class="alert-content"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>'+
	'<strong>Warning!</strong><br/>' + szoveg + '</div></div>' );
}

function table() {
"use strict";

	var table = $('.table_top_content');
	table.DataTable({
		"dom": '<<"" <"dataTable_top left col-xs col-sm-12 col-md-6 col-lg-6 col-xl-6 pl-0"i<"clear">> <"dataTable_top right col-xs col-sm-12 col-md-6 col-lg-6 col-xl-6 pr-0"f<"clear">> >rt<"bottom"p<"clear">>',
		"oLanguage": { "sSearch": "" } 
	});
}

function adatBe(adat, szoveg){
	
	var ertek = document.getElementById(adat).value;
	
	if(ertek == ""){
		warning(szoveg + " field is empty!" );
		$( "#"+adat ).addClass( "redBG" );
		return 0;
	}
		
	var nbass = parseInt(ertek);
			
	if(!Number.isInteger(nbass)) {
		warning(szoveg + " must be an integer number!" );
		$( "#quantum" ).addClass( "redBG" );
		return 0;
	}
		
	return ertek;
}

function check(adat, szoveg){
	var ertek = parseInt(adat);
		if(!Number.isInteger(nbass)) {
			warning(szoveg + " must be an integer number!" );
		return -1;
	}	
	return ertek;
}


	 </script>
	

<!-- ////////// Right Sidebar ////////// -->
	<?php include "static/rightSidebar.php";?>

</div> <!-- /page -->

<!-- Core Plugins (necessary for Vega plugins)  -->
<script src="../js/app.min.js"></script>
<!-- DataTable script -->
<script type="text/javascript">


</script>
<!-- Custom Scripts -->
<script src="../js/custom.min.js"></script>

</body>
</html>
