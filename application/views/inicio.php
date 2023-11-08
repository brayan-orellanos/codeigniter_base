<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php echo RESOURCES ?>lib/iziToast/css/iziToast.min.css">
	<link rel="stylesheet" href="<?php echo RESOURCES ?>lib/select2/css/select2.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo RESOURCES ?>lib/select2/css/select2-bootstrap4.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo RESOURCES ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<title>CodeIgniter</title>
</head>

<body>
	<div id="container" class="p-5">
		<form action="<?php echo $path_add; ?>" class="container" id="roles" method="post">
			<label for="name" class="mb-4">Nombre</label>
			<input type="text" class="form-control mb-4" name="name" id="name" autocomplete="off">
			<input type="submit" class="btn btn-primary" id="add_form" value="Guardar">
		</form>
	</div>


	<script type="text/javascript" src="<?php echo RESOURCES ?>lib/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo RESOURCES ?>lib/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo RESOURCES ?>lib/jquery-form/jquery.form.min.js"></script>
	<script type="text/javascript" src="<?php echo RESOURCES ?>lib/jquery-validation/jquery.validate.js"></script>
	<script type="text/javascript" src="<?php echo RESOURCES ?>lib/jquery-validation/additional-methods.js"></script>
	<script type="text/javascript" src="<?php echo RESOURCES ?>lib/jquery-validation/localization/messages_es.js"></script>
	<script type="text/javascript" src="<?php echo RESOURCES ?>lib/select2/js/select2.full.js"></script>
	<script type="text/javascript" src="<?php echo RESOURCES ?>lib/select2/js/i18n/es.js"></script>
	<script type="text/javascript" src="<?php echo RESOURCES ?>lib/paginationjs/pagination.min.js"></script>
	<script type="text/javascript" src="<?php echo RESOURCES ?>lib/iziToast/js/iziToast.min.js"></script>
	<script type="text/javascript" src="<?php echo RESOURCES ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo RESOURCES ?>js/alerts.js"></script>
	<script>
		var index = "<?php echo $index; ?>"
	</script>
	<script type="text/javascript" src="<?php echo RESOURCES ?>js/add.js"></script>
</body>

</html>