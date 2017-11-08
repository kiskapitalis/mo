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
				<h4>Marvel via file input</h4>
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="#">Research components</a>
					<span class="breadcrumb-item active">Marvel via file input</span>
				</nav> <!-- /breadcrumb -->
			</div> <!-- /col -->
		</div> <!-- /row -->
		
		
		
		<!-- ////////// MARVEL //////////-->
		<div class="row">
		
		<!-- ////////// Headings //////////-->
		<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">        
			<div class="card">
				<div class="card-heading">
					<h1>MARVEL</h1>
					<h4>Calculates energy levels from measured transitions</h4>
				</div> <!-- /card-heading -->
				<div class="card-body">
					<blockquote>
					<p>
					<label for="quantum"><strong>NQN</strong>: Number of quantum numbers representing an energy level</label></br>
					<input type="text" name="quantum" id="quantum" class="full-width help disabled" title="quantum numbers" /></br></br>
					
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
		
	</div> <!-- /content -->
	
	
<!-- ////////// Run Marvel ////////// -->

	<script type="text/javascript" src="../js/marvel/jquery.min.js"></script>
	<script type="text/javascript" src="../js/marvel/jquery.common.min.js"></script>
	<script type="text/javascript" src="../js/marvel/graph.js"></script>	
	
	 <script>
	 
		document.getElementById("file").className = "collapse active";
		$("#results").hide();
		$( "#output" ).hide();
	 
		function SaveJSON() {
			if( supports_html5_storage() ){
				var data = textus;
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
		
		
		var textus = "";
		
		
		var openFile = function(event) {
			var input = event.target;
		
			var reader = new FileReader();
			reader.onload = function(){
				textus = reader.result;
				
				//var tmp = textus;
				//console.log (tmp == textus); //false :D
				var node = document.getElementById('output');
				node.innerText = textus;
				textus = node.innerText;
				/*console.log (tmp == textus); //false :D
				console.log (tmp == node.innerText); //false :D
				console.log (textus == node.innerText); //true :)
				console.log (typeof textus); //string
				console.log (typeof tmp); //string
				console.log (textus.split ('').map (function (c) { return c.charCodeAt (0); }));
				console.log (tmp.split ('').map (function (c) { return c.charCodeAt (0); }));*/
			};
			reader.readAsText(input.files[0]);
		}

		function RunMARVEL()
		{
			$("#results").show();
			//alert("HI");
			$( "#badlines" ).empty();
			$( "#result" ).empty();
			$( ".alert" ).remove();
			var text = textus;
			$( "#output" ).empty();
			$( "#output" ).show();
			document.getElementById("result").innerHTML='<div align="center" class="spinner primary-spinner"></div>';
			document.getElementById("output").innerHTML='<div align="center" class="spinner primary-spinner"></div>';
			//console.log(text);
			var res = text.split("\n");
			var nblines = res.length;
			var output = '<h3>Content of your file:</h3><table id="basic_table2" class="table_top_content table table-bordered table-responsive table-striped"><thead>'+
						'<th>Wavenumber</th><th>Uncertanity</th><th>Quantum numbers (upstage)</th><th>Quantum numbers (downstage)</th><th>Tag</th></thead><tbody>';
			var testnbass = document.getElementById("quantum").value;
			
			if(testnbass == "") {
				warning("NQN filed is empty!" );
				$( "#quantum" ).addClass( "redBG" );
				return;
			}
			
			
			var nbass = parseInt(document.getElementById("quantum").value);
			
			if(!Number.isInteger(nbass)) {
				warning("The NQN must be an integer number!" );
				$( "#quantum" ).addClass( "redBG" );
				return;
			}
			
			if(nblines > 1000) {
				warning("The maximum number of the lines is 1000!" );
				return;
			} else {
				graph =new Graph();
				var intext;
				var inlen, assup, asslow;
				var nbass = parseInt(document.getElementById("quantum").value);
				
				for (i = 0; i < nblines; i++) { 
					
					intext = res[i].split(/\s+/g);
					//console.log(intext);
					output += "<tr><td>"+intext[0]+"</td><td>"+intext[1]+"</td><td>";
					for (j = 0; j < nbass; j++)
						output += intext[j+2]+" ";
					output += "</td><td>";
					for (j = nbass; j < 2*nbass; j++)
						output += intext[j+2]+" ";
					output += "</td><td>"+intext[2+2*nbass]+"</td></tr>";
					
				
					
					
					if(intext.length != (2*nbass+3)) {
						// ERROR: bad line
						//alert(intext.length+" "+(2*nbass+3));
						//console.log(intext);
						var linenumber = i+1;
						warning("Wrong format in "+ linenumber +" line!" );
						return;
					}
					
					if(parseFloat(intext[0]) < 0.0)
						continue;
						
					inlen = intext.length;
					
					assup="";
					asslow="";
					for(j = 2; j < nbass+2; j++)
						assup += intext[j]+" ";
						
					for(j =  nbass+2; j < (2*nbass)+2; j++)
						asslow += intext[j]+" ";
					
					//console.log(assup+" "+asslow);
					var haveup = false;
					var havelow = false;
					var iup = -1;
					var ilow = -1;
					
					for(j = 0; j < graph.nodes.length; j++){
					
						if(assup == graph.nodes[j].name) {
							iup = j;
							haveup = true;
						}
							
						if(asslow == graph.nodes[j].name) {
							havelow = true;
							ilow = j;
						}
					}
					if(havelow == false) {
						nodelow = graph.addNode(asslow);
					} else {
						nodelow = graph.nodes[ilow];
					}
					
					if(haveup == false) {
						nodeup = graph.addNode(assup);
					} else {
						nodeup = graph.nodes[iup];
					}
					
					link = graph.addGraphEdge(parseFloat(intext[0]), parseFloat(intext[1]), nodeup, nodelow,intext[2*nbass+2]);
					nodelow.addEdge(link);
					nodeup.addEdge(link);
					
				} // for cycle
				
				dfs(graph.nodes[0]);
		  
				var nodesInDFS=[];
				var idSN = 0;  
				for(j = 0; j < graph.nodes.length; j++){
					if(graph.nodes[j].visit == true) {
						graph.nodes[j].nbinSN = idSN;
						nodesInDFS.push(graph.nodes[j]);
						idSN++;
					}
				}
		
				// MARVEL
				var nbEner = nodesInDFS.length;
				  
				var Y = [];
				var d = [];
				var x = [];
				var diagonal = [];
				 
				var matrix = [];
				for(var k=0; k<nbEner; k++) {
					matrix[k] = [];
					for(var j=0; j<nbEner; j++) {
						matrix[k][j] = 0.0;
					}
				 }
				
				var diag = 0.00, sum = 0.00;
				
				for(var j = 0; j < nbEner; j++)
				{
					actenergy = nodesInDFS[j];
					x[j] = 0.00;
					Y[j] = 0.00;
					diag = 0.00;
					row = actenergy.nbinSN;
					
					for(k = 0; k < actenergy.adjList.length; k++)
					{
						neigenergy = actenergy.adjList[k].getOtherNode(actenergy);
						col = neigenergy.nbinSN;
						matrix[row][col] += -1.00/(actenergy.adjList[k].unc*actenergy.adjList[k].unc);
						sum += -1.00/(actenergy.adjList[k].unc*actenergy.adjList[k].unc);
						
						diag += 1.00/(actenergy.adjList[k].unc*actenergy.adjList[k].unc);
						tr = actenergy.adjList[k].freq / (actenergy.adjList[k].unc*actenergy.adjList[k].unc);

						if(actenergy.adjList[k].iAmUp(actenergy) == false)
							tr *= -1.00;

						Y[j] += tr;
					}
					
					diagonal[row] = diag;
					matrix[row][row] += diag;

				}
				
				CGM(matrix, Y, x, diagonal, nbEner);
				 
				var minimum = x[0];
				 
				for(var j = 0; j < nbEner; j++)
				{
					if(x[j] < minimum)
						minimum = x[j];
				}
				 
				for(var j = 0; j < nbEner; j++)
				{
					if(minimum < 0.0)
					{
						nodesInDFS[j].energy = (x[j]+Math.abs(minimum));
					}
					else
					{
						nodesInDFS[j].energy = (x[j]-minimum);
					}
					nodesInDFS[j].unc = Math.sqrt((1.00/diagonal[j]+ 1.00/sum));
				}
				
				// detect bad lines
				var badlines = '<h3>Badlines:</h3><table class="table_top_content table table-bordered table-responsive table-striped"><thead><tr><th>Line tag</th><th>Orig. unc. / cm-1 </th><th>Optimal unc. / cm-1</th></thead><tbody>';
				var diff = 0.0;
				var hasbad = false;
				for(j = 0; j < nodesInDFS.length; j++){
				
					actenergy = nodesInDFS[j];
					
					for(k = 0; k < actenergy.adjList.length; k++) {
						if(actenergy.adjList[k].iAmUp(actenergy) == true) {
							diff = Math.abs(actenergy.adjList[k].freq - (actenergy.energy - actenergy.adjList[k].getOtherNode(actenergy).energy));
							
							if(diff > actenergy.adjList[k].unc){
								hasbad = true;
								badlines += "<tr><td>"+actenergy.adjList[k].ref+"</td><td>"+actenergy.adjList[k].unc.toFixed(6)+"</td><td>"+1.1*diff.toFixed(6)+"</td></tr>";
							}
							//console.log(actenergy.adjList[k].Ref+"  "+diff);
						}
					}
					
					// if has hasbad == true => print out
					/*if(hasbad) {
						badlines += actenergy.name+" "+actenergy.energy.toFixed(6)+" <br/>";
						for(k = 0; k < actenergy.adjList.length; k++) {
							if(actenergy.adjList[k].iAmUp(actenergy) == true) {
								diff = Math.abs(actenergy.adjList[k].freq - (actenergy.energy - actenergy.adjList[k].getOtherNode(actenergy).energy));
								
								
								badlines += "  "+actenergy.adjList[k].ref+"  "+actenergy.adjList[k].unc.toFixed(6)+"  "+diff.toFixed(6);
								
								if(diff > actenergy.adjList[k].unc)
								{
									badlines += " BAD <br/>";
								} else {
									badlines += "<br/>";
								}
								//console.log(actenergy.adjList[k].Ref+"  "+diff);
							}
						}
						badlines += "<br/><br/>";
					}*/
				}
				badlines +="</tbody></table>";
				
				if(!hasbad) {
					$( "#message" ).prepend( "<div class='alert success'>Database is self-consistent. It does not contain any bad line!</div>" );
				} else {
					warning("Database is not self-consistent! It contains at least one bad line! <br/> You should set the uncertainty of the bad line(s) to the optimal value!" );
					document.getElementById("badlines").innerHTML=badlines;
				}
				 
				// energy levels
				var result = '<h3>Energy levels:</h3><table id="basic_table2" class="table_top_content table table-bordered table-responsive table-striped"><thead>'+
				'<tr><th>Assignment</th><th>Energy value / cm-1</th><th>Approx. unc. / cm-1</th></thead><tbody>';
				for(j = 0; j < nodesInDFS.length; j++){
					//console.log(nodesInDFS[j].name+" "+nodesInDFS[j].energy); Math.round(original*100)/100
					result += "<tr><td>"+ nodesInDFS[j].name+" </td><td>"+nodesInDFS[j].energy.toFixed(6)+" </td><td>"+nodesInDFS[j].unc.toFixed(6)+"</td></tr>";
				}
				
				result+="</tbody></table>"
				
				document.getElementById("result").innerHTML=result;
				document.getElementById("output").innerHTML=output;
				table();
		
			} // if: too many lines
		} // function
		
	function warning(szoveg)
	{
		$( "#message" ).prepend( '<div class="alert alert-warning fade show" role="alert"><div class="alert-icon"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>'+
		'<div class="alert-content"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>'+
		'<strong>Warning!</strong><br/>' + szoveg + '</div></div>' );
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
