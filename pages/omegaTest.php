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
				<h4>Omega test</h4>
				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="#">Research components</a>
					<a class="breadcrumb-item" href="#">Tests</a>
					<span class="breadcrumb-item active">Omega test</span>
				</nav> <!-- /breadcrumb -->
			</div> <!-- /col -->
		</div> <!-- /row -->
		
		
		
		<!-- ////////// MARVEL //////////-->
		<div class="row">
		
		<!-- ////////// Headings //////////-->
		<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">        
			<div class="card">
				<div class="card-heading">
					<h1>OMEGA</h1>
					<h4>Test for Marvel output</h4>
				</div> <!-- /card-heading -->
				<div class="card-body">
					<blockquote>
					
					<p>
					<label for="ener"><strong>Energy</strong>: Number of the line containing energy values:</label></br>
						<input type="text" name="ener" id="ener" class="full-width help disabled" title="quantum numbers" value="5"/></br>
					<label for="elec"><strong>Electron state</strong>: Number of the line containing electron states:</label></br>
						<input type="text" name="elec" id="elec" class="full-width help disabled" title="quantum numbers" value="1"/></br>
					<label for="vib"><strong>Vibration</strong>: Number of the line containing vibration values:</label></br>
						<input type="text" name="vib" id="vib" class="full-width help disabled" title="quantum numbers" value="3"/></br>
					<label for="J"><strong>J</strong>: Number of the line containing J (rotational) values:</label></br>
						<input type="text" name="J" id="J" class="full-width help disabled" title="quantum numbers" value="2"/></br>
					<label for="omega"><strong>Omega</strong>: Number of the line containing omega values:</label></br>
						<input type="text" name="omega" id="omega" class="full-width help disabled" title="quantum numbers" value="4"/></br></br>
					
					<!-- ////////// Popover Right ////////// -->
					<button type="button" class="btn btn-info space-preview" data-html="true" data-container="body" data-toggle="popover" data-placement="right" 
						data-content="FIRST NQN COLUMN: assignation of the energy level<br />NEXT COLUMN: Energy value in cm-1<br />Last column: Uncertanity in cm-1"
						data-title="Marvel output">
						<i class="fa fa-info" aria-hidden="true"></i>  About Marvel output
					</button></br>
					
					<label for="textarea">MARVEL output:</label></br>
					
						<input id="FileUpload1" type='file' onchange='openFile(event)'><br/><br/>
						
					<button onclick="RunOMEGA();" class="btn btn-success space-preview">
						<i class="fa fa-check" aria-hidden="true"></i>Run OMEGA
					</p>
				</blockquote>
				</div> <!-- /card-body -->
			</div> <!-- /card -->
		</div> <!-- /col -->           
		
		<!-- ////////// Display Headings //////////-->
		<div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4 optional" id="results">        
			<div class="card">
				<div class="card-heading">
					<h2>Results:</h2>
				</div> <!-- /card-heading -->
				<div class="card-body" id="message">
					</div> <!-- /card-body -->
					<div class="card-body" id="output">
				</div> <!-- /card-body -->
			</div> <!-- /card -->
		</div> <!-- /col -->
		
		</div> <!-- /row -->
		
		<div> <!-- /row -->
		<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 optional" id="details">        
			<div class="card">
				<div class="card-heading">
					<h2>Diagram:</h2>
				<div class="card-body">
					<label for="link" id="eleclink"></label>
				</div> <!-- /card-body -->
				<div class="card-body">
					<label for="link" id="viblink"></label>
				</div> <!-- /card-body -->
				</div> <!-- /card-heading -->
				<div class="card-body">
					<div id="container"></div>
				</div>
			</div> <!-- /card -->
		</div> <!-- /col -->   
		</div> <!-- /row -->
		
		
			</div> <!-- /card -->
		
		
		
		
	</div> <!-- /content -->
	
	
<!-- ////////// Run Marvel ////////// -->

	<script type="text/javascript" src="../js/marvel/jquery.min.js"></script>
	<script type="text/javascript" src="../js/marvel/jquery.common.min.js"></script>
	<script type="text/javascript" src="../js/marvel/graph.js"></script>
	<script type="text/javascript" src="../js/marci/marci.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		
		
	 <script>

	$(".optional").hide();
	
	var textus = ""; //marci.js/openfile kitölti
	
	var openFile = function(event) {
	
	document.getElementById("output").innerHTML='<div align="center" class="spinner primary-spinner"></div>';
	document.getElementById("container").innerHTML='<div align="center" class="spinner primary-spinner"></div>';
	
	var input = event.target;

	var reader = new FileReader();
	reader.onload = function(){
		textus = reader.result;
		
		var node = document.getElementById('output');
		node.innerText = textus;
		textus = node.innerText;
		node.innerText = "";
	};
	reader.readAsText(input.files[0]);
}

function RunOMEGA(){
	

	$("#results").show();
	
	var enerNum = adatBe("ener", "Energy");
	var elecNum = adatBe("elec", "Electron state");
	var vibNum = adatBe("vib", "Vibration");
	var JNum = adatBe("J", "J (rotational)");
	var omegaNum = adatBe("omega", "Omega");
	
	if(enerNum == 0 || elecNum == 0 || vibNum == 0 || JNum == 0)
		return;
	
	$("#details").show();
	
	var text = textus;
	var res = text.split("\n");
	var nblines = res.length;
	//var output = '<h3>Content of your file:</h3><table id="filecontent" class="table_top_content table table-bordered table-responsive table-striped"><thead>'+
	//			'<tr><th>Eneregy</th><th>Electron state</th><th>Vibration</th><th>J (Rotation</th></thead><tbody>';
	
	/*if(nblines > 5000) {
		warning("The maximum number of the lines is 5000!" );
		return;
	} else {*/
	
	var Transitions = [];

	var Transition=function(elec, v, omega, J, ener)
	{
		this.elec = elec;
		this.v = v;
		this.omega = omega;
		this.J = J;
		this.ener = ener;
	}
	
	
		for (i = 0; i < nblines; i++) { 
			
			intext = res[i].split(/\s+/g);
			//console.log(intext);
			/*output += "<tr><td>"+intext[enerNum]+"</td><td>"+intext[elecNum]+"</td><td>";
			output += "</td><td>"+intext[vibNum]+"<td></td>"+intext[JNum]+"<td></td>"+intext[omegaNum]+"</td></tr>";*/
			var ize = new Transition(intext[elecNum], parseInt(intext[vibNum]), parseInt(intext[omegaNum]), parseInt(intext[JNum]), parseFloat(intext[enerNum]));
			Transitions.push(ize);
			
		}
	//}
	
	//document.getElementById("output").innerHTML=output;
	
	
	
	var Elecs = [];

	var Elec=function(elec)
	{
		this.elec = elec;
		this.vibs = [];
		EnergiaSzintek = [];
	}
	
//		EnergiaSzintek = [];
		
			var ESzintObj=function(elec, v, omega, Jmax)
			{
				this.elec = elec;
				this.v = v;
				this.omega = omega;
				this.Jmax = Jmax;
				this.enertomb = [];
			}
		
//				enertomb = [];

//							O1O2[j]=EnergiaSzintek[i].enertomb[j]-EnergiaSzintek[i].enertomb[j-1]
//									-EnergiaSzintek[i+1].enertomb[j]+EnergiaSzintek[i+1].enertomb[j-1];
//							O1O3[j]=EnergiaSzintek[i].enertomb[j]-EnergiaSzintek[i].enertomb[j-1]
//									-EnergiaSzintek[i+2].enertomb[j]+EnergiaSzintek[i+2].enertomb[j-1];

	//1. Input
	
	var omegaHiba = false;
	var asd = 0;

	$.each(Transitions , function(j, enerj) 
	{
		asd++;
		if (enerj.omega < 4 && enerj.omega > 0)
		{
			var E = 0;
			while(E < Elecs.length && enerj.elec != Elecs[E].elec)
				E++;
			if(!(E < Elecs.length))
				ujElec();
			else{
				var i = 0;
				while(i < Elecs[E].EnergiaSzintek.length && !(enerj.v == Elecs[E].EnergiaSzintek[i].v && enerj.omega == Elecs[E].EnergiaSzintek[i].omega)){
					i++;
				}
				if(!(i < Elecs[E].EnergiaSzintek.length)){
					ujVib();}
				else{
					if(enerj.J > Elecs[E].EnergiaSzintek[i].Jmax)
						Elecs[E].EnergiaSzintek[i].Jmax = enerj.J;}
			}
		}

		
		function ujElec()
		{		
			var ize = new Elec(enerj.elec);
			ize.vibs=[];
			ize.EnergiaSzintek=[];
			Elecs.push(ize);
			console.log("Elec: " + enerj.elec);
			E = Elecs.length - 1;
			ujVib();
		}	
		
		function ujVib()
		{
			switch(enerj.omega) 
			{
				case 1:
					var ize1 = new ESzintObj(enerj.elec, enerj.v, 1, enerj.J);
					var ize2 = new ESzintObj(enerj.elec, enerj.v, 2, 0);
					var ize3 = new ESzintObj(enerj.elec, enerj.v, 3, 0);
				break;
				case 2:
					var ize1 = new ESzintObj(enerj.elec, enerj.v, 1, 0);
					var ize2 = new ESzintObj(enerj.elec, enerj.v, 2, enerj.J);
					var ize3 = new ESzintObj(enerj.elec, enerj.v, 3, 0);
				break;
				case 3:
					var ize1 = new ESzintObj(enerj.elec, enerj.v, 1, 0);
					var ize2 = new ESzintObj(enerj.elec, enerj.v, 2, 0);
					var ize3 = new ESzintObj(enerj.elec, enerj.v, 3, enerj.J);
				break;			
			}
					Elecs[E].EnergiaSzintek.push(ize1, ize2, ize3);
					Elecs[E].vibs.push(enerj.v);
		}
	});
	
	
	
	console.log(Elecs);
	
	if(omegaHiba)
		warning("Database is containing different omega number! (not 1 / 2 / 3)");
	
	
	//2. Click functions

	
	elecValasztas();
	
	function elecValasztas()
	{
		var select = "Choose Electron state:</br> <select class='form-control' id='actelec'>";
		select += "<option value='"+-1+"'>"+"Nincs kiválasztva"+"</option>";
		for(var E = 0; E < Elecs.length; E++)
		select += "<option value='"+E+"'>"+Elecs[E].elec+"</option>";
		select += "</select>";
		$("#eleclink").after(select);
	   
		$("#actelec").change(function() { 
			var actelec=$(this).val();
			var actelec=parseInt(actelec);
			vibValasztas(actelec);
			var actvib=Elecs[actelec].vibs[0];
			
		//enertomb feltöltése
			if (Elecs[actelec].EnergiaSzintek[0].enertomb.length == 0)
			{
				for(var i = 0; i < Elecs[actelec].EnergiaSzintek.length; i++)
				{
					tomb = new Array(Elecs[actelec].EnergiaSzintek[i].Jmax);
					Elecs[actelec].EnergiaSzintek[i].enertomb = tomb;
				}


				$.each(Transitions , function(j, enerj) 
				{
					for(var i = 0; i < Elecs[actelec].EnergiaSzintek.length; i++)
					{
						if(enerj.v==Elecs[actelec].EnergiaSzintek[i].v && enerj.omega==Elecs[actelec].EnergiaSzintek[i].omega)
						{
							Elecs[actelec].EnergiaSzintek[i].enertomb[enerj.J] = enerj.ener;
							break;
						}
					}
				});
			}
			
			
			grafikon(actelec, actvib);
		});
	}
	
	
	
	
	function vibValasztas(actelec)
	{
		$("#viblink").empty();
		var select = "Choose Vibration:</br> <select class='form-control' id='actvib'>";
	   for(var v = 0; v < Elecs[actelec].vibs.length; v++)
		select += "<option value='"+Elecs[actelec].vibs[v]+"'>"+Elecs[actelec].vibs[v]+"</option>";
	   select += "</select>";
	   $("#viblink").after(select);
	   
	   $("#actvib").change(function() { 
			actvib=$(this).val();
			grafikon(actelec, actvib);
		});
	}
	
	
	//3. Grafikon
	
	
	function grafikon(actelec, actvib)
	{
		var josor = [];
		
		var E = actelec;
				for(var i = 0; i < Elecs[E].EnergiaSzintek.length; i=i+3)
				{
					if(actvib==Elecs[E].EnergiaSzintek[i].v)
					{
						var O1O2 = new Array(Elecs[E].EnergiaSzintek[i].Jmax);
						var O1O3 = new Array(Elecs[E].EnergiaSzintek[i].Jmax);
						for(var j = 0; j < Elecs[E].EnergiaSzintek[i].enertomb.length; j++)
						{
							O1O2[j]= null;
							O1O3[j]= null;
							josor.push(Elecs[E].EnergiaSzintek[i].enertomb[j] != null && Elecs[E].EnergiaSzintek[i+1].enertomb[j] != null && Elecs[E].EnergiaSzintek[i+2].enertomb[j] != null);
							if (josor[j] && josor[j-1])
							{
								O1O2[j]=Elecs[E].EnergiaSzintek[i].enertomb[j]-Elecs[E].EnergiaSzintek[i].enertomb[j-1]-Elecs[E].EnergiaSzintek[i+1].enertomb[j]+Elecs[E].EnergiaSzintek[i+1].enertomb[j-1];
								O1O3[j]=Elecs[E].EnergiaSzintek[i].enertomb[j]-Elecs[E].EnergiaSzintek[i].enertomb[j-1]-Elecs[E].EnergiaSzintek[i+2].enertomb[j]+Elecs[E].EnergiaSzintek[i+2].enertomb[j-1];
							}
						}
					}
					
				}

	
			
			Highcharts.chart('container', {
			
			    chart: {
					type: 'scatter',
					zoomType: 'xy'
				},

				title: {
					text: 'Omega test'
				},

				subtitle: {
					text: 'Source: your file'
				},

				yAxis: {
					title: {
						text: 'Differences'
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
					name: 'O1O2',
					data: O1O2
				}, {
					name: 'O1O3',
					data: O1O3
				}]
			});
	}
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
	console.log(ertek);
	
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
