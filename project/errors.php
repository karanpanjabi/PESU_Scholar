<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css ">
	<link rel="icon" type="image" href="logo.jpg">
</head>
<?php if(count($errors)>0): ?>
	<div class="error">
		<?php foreach($errors as $error): ?>
			<p style="color:white;font-size:20px;"><?php echo $error; ?></p>
		<?php endforeach ?>
	</div>

<?php endif ?>
</html>

