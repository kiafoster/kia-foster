<?php 
//keep track of the status of the page(error/success/etc)
$status = 'success';

//change the message if the page si in success or error mode
if( $status == 'success' ){
	$message = 'Congrats! This was successful!';
}else{
	$message = 'Oh No! Something went terribly wrong!';
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Untitled document</title>
  <style type="text/css">
   		.success{
   			color: white;
   			background-color: #0000A0;
   		}

   		.error{
   			color: red;
   			background-color: #FF80C0;
   		}
  </style>
</head>
<body class="<?php echo $status; ?>">
	<h1>
		<?php 
		//show the message we set at the top of the page
		echo $message; 
		?>
	</h1>
</body>
</html>