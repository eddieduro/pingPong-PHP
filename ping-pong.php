<?php
	$start_number = $_GET['start_number'];
	$end_number = $_GET['ending_number'];		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ping Pong</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- Stylesheets -->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="container">
		<h3>Ping Pong Test</h3>
		<hr>
		<ul>
			<?php
				foreach(range($start_number, $end_number) as $number){
					if($number % 3 == 0 && $number % 5 == 0) {
						echo "<li> ping-pong </li>";  
					} elseif($number % 3 == 0) {
						echo "<li> ping </li>";  
					} elseif($number % 5 == 0) {
						echo "<li> pong </li>";  
					} else {
						echo "<li>" . $number . "</li>";
					}
				}
			?>
		</ul>
	</div>
	<!-- Scripts -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>