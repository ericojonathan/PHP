<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/assets/css/bulma.min.css">
		<title>
			<?= isset($PageTitle) ? $PageTitle : "Default Title"?>
		</title>
<?php 
	if (function_exists('customPageHeader')){
      customPageHeader();
	}
?>
  </head>
	<body>
