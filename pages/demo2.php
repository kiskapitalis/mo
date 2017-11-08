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
				<h4>DEMO 2</h4>
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="#">Open sites</a>
					<a class="breadcrumb-item" href="#">Demos</a>
					<span class="breadcrumb-item active">Demo 2</span>
				</nav> <!-- /breadcrumb -->
			</div> <!-- /col -->
		</div> <!-- /row -->
		
		
		
		<!-- ////////// MARVEL //////////-->
		<div class="row">
		
		<!-- ////////// Headings //////////-->
		<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">        
			<div class="card">
				<div class="card-heading">
					<h1>DEMO 2</h1>
					<h4>Simple network containing 1 badline</h4>
				</div> <!-- /card-heading -->
				<div class="card-body">
					<blockquote>
					
								<!-- ////////// Popover Right ////////// -->
								<button type="button" class="btn btn-info space-preview" data-html="true" data-container="body" data-toggle="popover" data-placement="right" 
									data-content="<img src='../img/demo2.jpg' width='400' />">
									<i class="fa fa-info" aria-hidden="true"></i>  Graph representation
								</button></br>
								
								
						
				
					<p>
					<label for="quantum"><strong>NQN</strong>: Number of quantum numbers representing an energy level</label></br>
					<input type="text" name="quantum" id="quantum" class="full-width help disabled" title="quantum numbers" value="3" disabled /></br></br>
					
					<!-- ////////// Popover Right ////////// -->
					<button type="button" class="btn btn-info space-preview" data-html="true" data-container="body" data-toggle="popover" data-placement="right" 
						data-content="FIRST COLUMN: transition wavenumber in cm-1<br />SECOND COLUMN: uncertanity in cm-1<br />Next NQN columns: quantum numbers of the upper energy levels <br />Next NQN columns: quantum numbers of the lower energy levels <br />Last column: tag of the line"
						data-title="Marvel input">
						<i class="fa fa-info" aria-hidden="true"></i>  About Marvel input
					</button></br>
					
					<label for="textarea">MARVEL input:</label></br>
					<textarea class="textarea" name="textarea" id="textarea" cols="100%" rows="8" title="MARVEL input" disabled>1.0 0.1 0 0 1 0 0 0 test.1
1.0  0.1  0  0  2  0  0  1  test.2
1.2  0.1  0  0  2  0  0  1  badline.1
1.0  0.1  0  0  4  0  0  2  test.3
1.5  0.1  0  0  3  0  0  1  test.4
0.5  0.1  0  0  4  0  0  3  test.5</textarea></br></br>
					<button onclick="RunMARVEL();" class="btn btn-success space-preview">
						<i class="fa fa-check" aria-hidden="true"></i>Run MARVEL
					<!--<a href="#" onclick="RunMARVEL();" class="button">Run MARVEL</a>-->
					</p>
				</blockquote>
						
				</div> <!-- /card-body -->
			</div> <!-- /card -->
		</div> <!-- /col -->           
		
		<!-- ////////// Display Headings //////////-->
		<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">        
			<div class="card">
				<div class="card-heading">
					<h2>RESULTS:</h2>
				</div> <!-- /card-heading -->
					<div class="card-body" id="badlines">
					</div>
					<div class="card-body" id="result">
					</div>
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
		function RunMARVEL()
		{
			//alert("HI");
			$( "#badlines" ).empty();
			$( "#result" ).empty();
			$( ".alert" ).remove();
			var text = document.getElementById("textarea").value;
			var res = text.split("\n");
			var nblines = res.length;
			//console.log(res.length);
			
			if(nblines > 1000) {
				$( "#leftbox" ).prepend( "<div class='alert error'>The maximum number of the lines is 1000!</div>" );
				return;
			} else {
				graph =new Graph();
				var intext;
				var inlen, assup, asslow;
				var nbass = parseInt(document.getElementById("quantum").value);
				
				for (i = 0; i < nblines; i++) { 
					
					intext = res[i].split(/\b\s+/);
					
					//console.log(intext.length);
					
					if(intext.length != (2*nbass+3)) {
						// ERROR: bad line
						var linenumber = i+1;
						$( "#leftbox" ).prepend( "<div class='alert error'>Wrong format in "+ linenumber +" line!</div>" );
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
				var badlines = '</br><h3>Badlines:</h3><table id="basic_table2" class="table_top_content table table-bordered table-responsive table-striped"><thead><tr><th>Line tag</th><th>Orig. unc. / cm-1 </th><th>Optimal unc. / cm-1</th></thead><tbody>';
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
				badlines +="</tbody></table></br></br>";
				
				if(!hasbad) {
					$( "#leftbox" ).prepend( "<div class='alert success'>Database is self-consistent! It does not contain any bad line!</div>" );
				} else {
					$( "#leftbox" ).prepend( "<div class='alert error'>Database is not self-consistent! It contains at least one bad line! <br/> You should set the uncertainty of the bad line(s) to the optimal value! </div>" );
					document.getElementById("badlines").innerHTML=badlines;
				}
				 
				// energy levels
				var result = '<h3>Goodlines:</h3><table id="basic_table2" class="table_top_content table table-bordered table-responsive table-striped"><thead><tr><th>Assignment</th><th>Energy value / cm-1</th><th>Approx. unc. / cm-1</th></thead><tbody>';
				for(j = 0; j < nodesInDFS.length; j++){
					//console.log(nodesInDFS[j].name+" "+nodesInDFS[j].energy); Math.round(original*100)/100
					result += "<tr><td>"+ nodesInDFS[j].name+" </td><td>"+nodesInDFS[j].energy.toFixed(4)+" </td><td>"+nodesInDFS[j].unc.toFixed(2)+"</td></tr>";
				}
				
				result+="</tbody></table>"
				
				document.getElementById("result").innerHTML=result;
				table();
		
			} // if: too many lines
		} // function
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
