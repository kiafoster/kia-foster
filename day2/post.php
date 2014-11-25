<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Form - Post Method</title>

  <style type="text/css">

  	input{
  		display: block;
  		margin-bottom: 20px;
  	}

  </style>
</head>
<body>

	<?php if( $_POST['did_submit'] == true ){ ?>
	<h1>Good Morning! <?php echo $_POST['name'] ?>. 
		<?php echo $_POST['breakfast'] ?> sounds delish!</h1>
	<?php } ?>

	<form method="post" action="post.php">

		<label for="name">What is your name?</label>
		<input type="text" name="name" id="name">

		<label for="breakfast">What did you have for breakfast?</label>
		<input type="text" name="breakfast" id="breakfast">

		<input type="submit" value="Submit This">

		<input type="hidden" name="did_submit" value="true">

	</form>

</body>
</html>