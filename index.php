<?php
	// Report simple running errors
	error_reporting(E_ERROR);
	
	
	// Test App Tier
	require_once ('./AppClient.php');
?>
<html>
<head>
	<title>App Client</title>
	<style>
		#serverResponse {
			padding: 5px 10px 5px 10px;
			background-color: #CCC;
			color: #a70303;
			border: 1px solid #999;
		}
		p {
			font-family: "Arial","Helvetica";
			font-size: 80%;
		}
		span {
			font-weight: bold;
			
		}
	
	</style>
</head>
	<body>

		<?php 
			// Set client parameters
			//appClient('lb-app.itcloudarchitect.com', '9001', 'sqrt', gethostbyname(exec('hostname')));
			appClient('localhost', '9000', $_GET['sym'], gethostbyname(exec('hostname')));
			
		?>
	</body>
</html>		