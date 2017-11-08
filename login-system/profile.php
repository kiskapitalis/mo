<?php
/* Displays user information and some useful messages */
require 'db.php';
session_start();
// Check if user is logged in using the session variable 
 
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");  
	die;    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}

	$sq1 = "SELECT * FROM tasks;";
	$result = $mysqli->query($sq1);
?>
<!DOCTYPE html>
<html >
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <?php include 'css/css.html'; ?>
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
</head>

<body>
  <div class="form">

          <h1>Welcome</h1>
          
          
          <h2><?php echo $first_name.' '.$last_name; ?></h2>
          <p><?= $email ?></p>
		  
		<!--    
			<h1>Tasks</h1>
		
			<p>
			<table id='muta'><tr><th>ID</th><th>Article name</th><th>Article link</th><th>Responsible</th><th>Button</th></tr>
				<h2><?php 
				
				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>". $row["id"]. "</td><td>". $row["name"]. "</td><td>" . $row["link"]. "</td><td>" . $row["person"] . "</td><td><button type='button' onclick='takeOn(". $row["id"]. ");' >Take on!</button></td></tr>";
					}
				}
				?>
				</table>
				
				</h2>
			</p>
		-->
		  
		  
          </br></br></br>
          <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
		  </br></br></br>
		  <a href="tasks.php"><button class="button button-block" name="logout"/>Go to Marvel</button></a>

    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

<script>
	function takeOn(rowId) {
		console.log(rowId);
		var person = "<?php echo $first_name; ?>";
		console.log(person);
		var adat = {id: rowId, person: person};
			$.ajax({
				url: "szerk.php",
				type: 'POST',
				data: adat,
					success:function(response){
						console.log("Módosítva");
					},
					error:function (xhr, ajaxOptions, thrownError){
						console.log("Hiba");
						alert(thrownError);
					}
				});
	}

</script>


</body>
</html>
