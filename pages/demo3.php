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
				<h4>DEMO 3</h4>
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="#">Open sites</a>
					<a class="breadcrumb-item" href="#">Demos</a>
					<span class="breadcrumb-item active">Demo 3</span>
				</nav> <!-- /breadcrumb -->
			</div> <!-- /col -->
		</div> <!-- /row -->
		
		
		
		<!-- ////////// MARVEL //////////-->
		<div class="row">
		
		<!-- ////////// Headings //////////-->
		<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">        
			<div class="card">
				<div class="card-heading">
					<h1>DEMO 3</h1>
					<h4>Complex network</h4>
				</div> <!-- /card-heading -->
				<div class="card-body">
					<blockquote>
					

								<button type="button" class="btn btn-info space-preview" onclick="SaveJSON();">
									<i class="fa fa-info" aria-hidden="true"></i>  Graph representation
								</button></br>
								
								
						
				
					<p>
					<label for="quantum"><strong>NQN</strong>: Number of quantum numbers representing an energy level</label></br>
					<input type="text" name="quantum" id="quantum" class="full-width help disabled" title="quantum numbers" value="6" disabled /></br></br>
					
					<!-- ////////// Popover Right ////////// -->
					<button type="button" class="btn btn-info space-preview" data-html="true" data-container="body" data-toggle="popover" data-placement="right" 
						data-content="FIRST COLUMN: transition wavenumber in cm-1<br />SECOND COLUMN: uncertanity in cm-1<br />Next NQN columns: quantum numbers of the upper energy levels <br />Next NQN columns: quantum numbers of the lower energy levels <br />Last column: tag of the line"
						data-title="Marvel input">
						<i class="fa fa-info" aria-hidden="true"></i>  About Marvel input
					</button></br>
					
					<label for="textarea">MARVEL input:</label></br>
					<textarea class="textarea" name="textarea" id="textarea" cols="100%" rows="8" title="MARVEL input" disabled>23.794352  0.0001	0 0 0	1 0 1  	0 0 0	 0 0 0	line.0
18.577377	0.0001	0 0 0	1 1 0  	0 0 0	 1 0 1	line.1
37.137119	0.0001	0 0 0	1 1 1 	0 0 0	  0 0 0	line.2
32.953684	0.0001	0 0 0	2 0 2  	0 0 0	 1 1 1	line.3
25.085121	0.0001	0 0 0	2 1 1 	0 0 0	  2 0 2	line.4
55.70202	0.0001	0 0 0	2 1 2	0 0 0	  1 0 1	line.5
99.026782	0.0001	0 0 0	2 2 0	0 0 0	   1 1 1 	line.6
40.987976	0.0001	0 0 0	2 2 0	0 0 0	  2 1 1	line.7
92.529886	0.0001	0 0 0	2 2 1	0 0 0	   1 1 0	line.8
55.405243	0.0001	0 0 0	2 2 1	0 0 0	  2 1 2	line.9
57.265263	0.0001	0 0 0	3 0 3	0 0 0	   2 1 2	line.10
36.604144	0.0001	0 0 0	3 1 2 	0 0 0	  3 0 3	line.11
38.464165	0.0001	0 0 0	3 1 2  	0 0 0	  2 2 1	line.12
72.187662	0.0001	0 0 0	3 1 3	0 0 0	   2 0 2	line.13
132.659973	0.0001	0 0 0	3 2 1	0 0 0	 2 1 2	line.14
38.79055	0.0001	0 0 0	3 2 1 	0 0 0	  3 1 2	line.15
111.125474	0.0001	0 0 0	3 2 2	0 0 0	   2 1 1 	line.16
64.022934	0.0001	0 0 0	3 2 2	0 0 0	   3 1 3	line.17
73.262198	0.0001	0 0 0	3 3 0	0 0 0	   3 2 1	line.18
148.656887	0.0001	0 0 0	3 3 0	0 0 0	 3 0 3	line.19
150.516912	0.0001	0 0 0	3 3 0 	0 0 0	2 2 1	line.20
78.917907	0.0001	0 0 0	3 3 1	0 0 0	   3 2 2	line.21
149.055398	0.0001	0 0 0	3 3 1 	0 0 0	2 2 0	line.22
79.774265	0.0001	0 0 0	4 0 4	0 0 0	   3 1 3	line.23
69.195604	0.0001	0 0 0	4 1 3	0 0 0	   3 2 2	line.24
53.444272	0.0001	0 0 0	4 1 3	0 0 0	   4 0 4	line.25
88.076714	0.0001	0 0 0	4 1 4	0 0 0	   3 0 3 	line.26
30.560184	0.0001	0 0 0	4 2 2	0 0 0	  3 3 1	line.27
40.282486	0.0001	0 0 0	4 2 2 	0 0 0	  4 1 3	line.28
126.996453	0.0001	0 0 0	4 2 3	0 0 0	   3 1 2 	line.29
75.523892	0.0001	0 0 0	4 2 3	0 0 0	   4 1 4	line.30
68.062971	0.0001	0 0 0	4 3 1	0 0 0	   4 2 2	line.31
161.789727	0.0001	0 0 0	4 3 1 	0 0 0	4 0 4	line.32
82.154591	0.0001	0 0 0	4 3 2	0 0 0	   4 2 3	line.33
57.168974	0.0001	0 0 0	4 3 2	0 0 0	   5 0 5	line.34
104.291637	0.0001	0 0 0	4 4 0	0 0 0	   4 3 1 	line.35
105.590791	0.0001	0 0 0	4 4 1	0 0 0	   4 3 2 	line.36
100.509505	0.0001	0 0 0	5 0 5	0 0 0	   4 1 4 	line.37
99.095216	0.0001	0 0 0	5 1 4	0 0 0	   4 2 3 	line.38
74.109609	0.0001	0 0 0	5 1 4	0 0 0	   5 0 5	line.39
104.572694	0.0001	0 0 0	5 1 5	0 0 0	   4 0 4 	line.40
63.993773	0.0001	0 0 0	5 2 3	0 0 0	   4 3 2	line.41
47.053148	0.0001	0 0 0	5 2 3	0 0 0	   5 1 4	line.42
89.583261	0.0001	0 0 0	5 2 4	0 0 0	   5 1 5 	line.43
32.366219	0.0001	0 0 0	5 2 4 	0 0 0	  4 3 1	line.44
140.71168	0.0001	0 0 0	5 2 4 	0 0 0	4 1 3	line.45
62.301378	0.0001	0 0 0	5 3 2	0 0 0	   5 2 3	line.46
87.759351	0.0001	0 0 0	5 3 3 	0 0 0	 5 2 4 	line.47
101.529096	0.0001	0 0 0	5 4 1	0 0 0	   5 3 2 	line.48
106.146313	0.0001	0 0 0	5 4 2	0 0 0	   5 3 3 	line.49
120.071106	0.0001	0 0 0	6 0 6	0 0 0	   5 1 5 	line.50
96.209176	0.0001	0 0 0	6 1 5	0 0 0	   6 0 6 	line.51
126.69702	0.0001	0 0 0	6 1 5	0 0 0	  5 2 4 	line.52
121.904427	0.0001	0 0 0	6 1 6	0 0 0	   5 0 5 	line.53
98.805377	0.0001	0 0 0	6 2 4	0 0 0	   5 3 3 	line.54
59.867707	0.0001	0 0 0	6 2 4	0 0 0	   6 1 5	line.55
105.659022	0.0001	0 0 0	6 2 5	0 0 0	   6 1 6 	line.56
44.099329	0.0001	0 0 0	6 2 5 	0 0 0	  5 3 2	line.57
153.453854	0.0001	0 0 0	6 2 5 	0 0 0	5 1 4	line.58
51.434468	0.0001	0 0 0	6 3 3	0 0 0	   5 4 2	line.59
58.775413	0.0001	0 0 0	6 3 3	0 0 0	   6 2 4	line.60
96.067292	0.0001	0 0 0	6 3 4	0 0 0	   6 2 5	line.61
38.637516	0.0001	0 0 0	6 3 4   	0 0 0	 5 4 1	line.62
96.231262	0.0001	0 0 0	6 4 2	0 0 0	   6 3 3	line.63
107.746075	0.0001	0 0 0	6 4 3	0 0 0	   6 3 4 	line.64
130.852444	0.0001	0 0 0	6 5 1	0 0 0	   6 4 2	line.65</textarea></br></br>
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
					<div  class="card-body" id="message">
					</div>
					<div  class="card-body" id="badlines">
					</div>
					<div  class="card-body" id="result">
					</div>
			</div> <!-- /card -->
		</div> <!-- /col -->        
		
		</div> <!-- /row -->
		
	</div> <!-- /content -->
	
	
<!-- ////////// Run Marvel ////////// -->

	<script type="text/javascript" src="../js/marvel/jquery.min.js"></script>
	<script type="text/javascript" src="../js/marvel/jquery.common.min.js"></script>
	<script type="text/javascript" src="../js/marvel/graph.js"></script>	
	
	 <script>
	 
		//document.getElementById("demo3").className = "collapse active";
		//document.getElementById("demo").classList.add('collapse active');
	 
		function SaveJSON() {
			if( supports_html5_storage() ){
				var data = document.getElementById("textarea").value;
				localStorage.setItem('transitions', JSON.stringify(data));
				
				var data2 = document.getElementById("quantum").value;
				localStorage.setItem('nqnumber', JSON.stringify(data2));
				
				window.location = "graph.php?#Demo3"
			}
		}
		
		function supports_html5_storage() {
		  try {
			return 'localStorage' in window && window['localStorage'] !== null;
		  } catch(e){
			return false;
		  }
		}
		
		function RunMARVEL()
		{
			//alert("HI");
			$( "#message" ).empty();
			$( "#badlines" ).empty();
			$( "#result" ).empty();
			$( ".alert" ).remove();
			var text = document.getElementById("textarea").value;
			var res = text.split("\n");
			var nblines = res.length;
			//console.log(res.length);
			
			if(nblines > 1000) {
				$( "#message" ).prepend( "<div class='alert error'>The maximum number of the lines is 1000!</div>" );
				return;
			} else {
				graph =new Graph();
				var intext;
				var inlen, assup, asslow;
				var nbass = parseInt(document.getElementById("quantum").value);
				
				for (var i = 0; i < nblines; i++) { 
					
					intext = res[i].split(/\b\s+/);
					
					//console.log(intext.length);
					
					if(intext.length != (2*nbass+3)) {
						// ERROR: bad line
						console.log(intext.length);
						console.log(2*nbass+3);
						var linenumber = i+1;
						$( "#message" ).prepend( "<div class='alert error'>Wrong format in "+ linenumber +" line!</div>" );
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
				var badlines = "<table><thead><tr><th>Line tag</th><th>Orig unc. / cm-1 </th><th>Optimal unc. / cm-1</th></thead><tbody>";
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
					$( "#message" ).prepend( "<div class='alert error'>Database is not self-consistent! It contains at least one bad line! <br/> You should set the uncertainty of the bad line(s) to the optimal value! </div>" );
					document.getElementById("badlines").innerHTML=badlines;
				}
				 
				// energy levels
				var result = '<h3>Goodlines:</h3><table id="basic_table2" class="table_top_content table table-bordered table-responsive table-striped"><thead>'+
				'<tr><th>Assignment</th><th>Energy value / cm-1</th><th>Approx. unc. / cm-1</th></thead><tbody>';
				for(j = 0; j < nodesInDFS.length; j++){
					//console.log(nodesInDFS[j].name+" "+nodesInDFS[j].energy); Math.round(original*100)/100
					result += "<tr><td>"+ nodesInDFS[j].name+" </td><td>"+nodesInDFS[j].energy.toFixed(6)+" </td><td>"+nodesInDFS[j].unc.toFixed(6)+"</td></tr>";
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
	console.log("table");
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
