<!DOCTYPE html>

<html>
	
	<head>
		<title></title>
		
		<style>
			section{
				border: 1px solid #000;
				width:450px;
				margin: 50px auto 0;
				padding: 10px;
			}
			
		</style>
		
	</head>
	
	<body>
		<!-- ACTION CAN BE URL, OR A FILE
			INPUT NAME GETS PASSED TO PROCESS.PHP
			IN PHP WE USE $_POST['NAME'] -->
			<section>
		<form action="process.php" method="post" enctype="application/x-www-form-urlencoded">
			<!-- ENCLOSED ALL INPUT FIELDS DEFINES WHERE AND HOW TO SUBMIT
				FORM (INPUT, LABELS, TEXTAREA, SELECT, CHECKBOXES, RADIOBUTTONS)-->
			<label>Name:</label>
			<input name="name" id="name" size="50" />
			<br />
			
			<label>Street:</label>
			<input type="text" name="street" id="street" size="50"/>
			<br />
			<label>State:</label>
			<input type="text" name="state" id="state" value="Ohio" size="10" />
			<br />
			<input type="submit" value="Apply now!" />
			<input type="reset" value="Clear Form" />
			
		</form>
		</section>
		
	</body>
	
</html>