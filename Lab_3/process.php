<!DOCTYPE html>

<?php
	/*
	 * 
	 */

	$name = $_POST['name'];
	// echo $name;
	# echo "<br />";
	$street = $_POST['street'];
	// print $street;
	// echo ", ";
	$state = $_POST['state'];
	# print $state;
	

?>



<html>
	<head>
		<title>user Application</title>
		
		<style>
			section{
				border: 1px solid #000;
				width:450px;
				margin: 50px auto 0;
				padding: 10px;
			}
			
			section p span{
				color: #880000;
			}
			
		</style>
		
	</head>
	
	<body>
		
		<section>
		
		
		<?php
			if(!empty ($name))
			{
				echo "<p>Your name is: ". "<span>" . $name . "</span></p>";
			}
			else {
				echo "<p><span>You need to provide us with your name!!!!</span>";
			}
			
			
			
			echo "<p>Your street is: " . "<span>" . $street . "</span></p>";
			print ("<p>Your State is: ". "<span>" . $state . "</span></p>")
		
		?>
		
		</section>
		
	</body>
	
	
</html>