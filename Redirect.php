<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	</head>   

	<body>
		<?php  
			if (!empty($_GET['testID'])){
				$testID = $_GET['testID'];		
				$csv = array_map('str_getcsv', file('redirectMatrix/Player_V3_URLs.csv'));
				if ($testID == "00"){
					print "<pre>";
					print_r($csv);
					print "</pre>";
					die(0);
				}
				foreach($csv as $line){
					if ($line[0] == $testID){
						header('Location:'. $line[1]);
					}
				}
			} else {
				echo 'Missing testID :-(';
			}
		?>
	</body>
</html>