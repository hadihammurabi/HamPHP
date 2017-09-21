<!-- Catatan: Jangan mengubah file ini, kecuali untuk kebutuhan tertentu -->

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php basepath('css/bootstrap/bootstrap.min.css', 'css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php basepath('css/tether/tether.min.css', 'css'); ?>">
	<script type="text/javascript" src="<?php basepath('js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php basepath('js/tether.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php basepath('js/bootstrap.min.js'); ?>"></script>
	<title>Error: <?php echo $error_name; ?></title>
</head>
<body>
	<div class="container mt-1">
		<div class="alert alert-danger">
			<h4 id="error_name">Error: <?php echo $error_name; ?></h4>
			<hr/>
			<p id="error_message"><?php echo $error_message; ?></p>	
		</div>
	</div>
</body>
</html>