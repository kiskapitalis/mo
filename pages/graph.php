<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "static/head.php";?>
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
				<h4 id="cim">GRAPH</h4>
			</div> <!-- /col -->
		</div> <!-- /row -->
		</br>
		<div class="row">
		<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-6">
			<button class="btn btn-primary space-preview" onclick="myFunction()">
				<i class="fa fa-cloud" aria-hidden="true"></i>Redraw graph</button>
		</div>
		<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-6">
			<p align="right">
			<button align="right" class="btn btn-danger space-preview" onclick="history.go(-1);">
				<i class="fa fa-times-circle" aria-hidden="true"></i>Go back</button>
			</p>
		</div>
		<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
		</div> <!-- /row -->

					
					</br>
			<div id="canvas" size="100%"></div>
			<div id="log"></div>
		
	</div>

	<script type="text/javascript" src="../js/marvel/jquery.min.js"></script>
	<script type="text/javascript" src="../js/marvel/jquery.common.min.js"></script>
	<!--  The Raphael JavaScript library for vector graphics display  -->
    <script type="text/javascript" src="../js/marvel/raphael-min.js"></script>
<!--  Dracula  -->
<!--  An extension of Raphael for connecting shapes -->
    <script type="text/javascript" src="../js/marvel/dracula_graffle.js"></script>
<!--  Graphs  -->
    <script type="text/javascript" src="../js/marvel/dracula_graph.js"></script>
    <script type="text/javascript" src="../js/marvel/dracula_algorithms.js"></script>
	
	 <script>
	 
		
	 
		hash();
	 
	 	function hash(){
			var elozoOldal = "<h3>Graph</h3>";
			var hash = window.location.hash;
			console.log(hash);
			var Tmp = hash.substring(1);
			elozoOldal = "<h4>Graph representation of <strong>" + Tmp + "</strong> network</h4>";
			console.log(elozoOldal);
			document.getElementById("cim").innerHTML=elozoOldal;
		}
	 
	 
		function myFunction() {
			location.reload();
		}

		$( document ).ready(function() {
	
			var redraw;
			var height = 700;
			var width = 1250;
			
			var render = function(r, n) {
				/* the Raphael set is obligatory, containing all you want to display */
				var set = r.set().push(
					/* custom objects go here */
					r.rect(n.point[0]-20, n.point[1], 40, 20).attr({"fill": "#feb", r : "8px", "stroke-width" : n.distance == 0 ? "3px" : "1px" })).push(
					r.text(n.point[0], n.point[1] + 10, (n.label || n.id) ).attr({"font-size":"8px"}));
				return set;
			};

			var g = new Graph();
			
			var text = getLocalData();
	
			
		  
			var res = text.split("\n");
			//document.getElementById('log').innerHTML = res;
			//console.log(res);
			var nblines = res.length;
			var intext;
			var inlen, assup, asslow;
			var nbassText = getLocalDataNQN();
			var nbass = parseInt(nbassText);
			//alert(nbass);
			var nodes =[];
			var links=[];
			
			for (i = 0; i < nblines; i++) { 
					
				intext = res[i].split(/\b\s+/);
				
				//console.log(intext);
				if(intext.length == 0 || intext.length == 1)
					continue;
				
				if(intext.length != (2*nbass+3)) {
					// ERROR: bad line
					var linenumber = i+1;
					//alert('bad '+intext.length);
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
				
				
				for(j = 0; j < nodes.length; j++){
				
					if(assup == nodes[j]) {
						haveup = true;
					}
						
					if(asslow == nodes[j]) {
						havelow = true;
					}
				}
				
				if(havelow == false) {
					nodes.push(asslow)
				} 
				
				if(haveup == false) {
					nodes.push(assup)
				} 
				
				links.push(asslow);
				links.push(assup);
					
			} // for cycle
		  
			//document.getElementById('log').innerHTML = nodes;
			for(j = 0; j < nodes.length; j++){
				g.addNode(nodes[j], {render:render});
			}
			
			g.addEdge2 = g.addEdge;
			g.addEdge = function(from, to, style) { !style && (style={}); style.weight = Math.floor(Math.random()*10) + 1; g.addEdge2(from, to, style); };
			
			for(j = 0; j < links.length; j+=2){
				g.addEdge(links[j], links[j+1]);
			}
			
			var layouter = new Graph.Layout.Spring(g);
			layouter.layout();
			
			/* draw the graph using the RaphaelJS draw implementation */
			var renderer = new Graph.Renderer.Raphael('canvas', g, width, height);

			/* colourising the shortest paths and setting labels */
			for(e in g.edges) {
				
					g.edges[e].style.stroke = "#bfa";
					g.edges[e].style.fill = "#56f";
				
			}
			
			renderer.draw();

			redraw = function() {
				layouter.layout();
				renderer.draw();
			};
		});
		
		var getLocalData = function(){
			if( supports_html5_storage() ){
				var userData = JSON.parse(localStorage.getItem('transitions'));
				if(userData !== null){
					return userData;
				
					//document.getElementById('log').innerHTML = userData;
				}
			}
			
		}
		
		var getLocalDataNQN = function(){
			if( supports_html5_storage() ){
				var userData = JSON.parse(localStorage.getItem('nqnumber'));
				if(userData !== null){
					return userData;
				
					//document.getElementById('log').innerHTML = userData;
				}
			}
			
		}
		
		function supports_html5_storage() {
		  try {
			return 'localStorage' in window && window['localStorage'] !== null;
		  } catch(e){
			return false;
		  }
		}
		
		
	 </script>
	
</body>
</html>