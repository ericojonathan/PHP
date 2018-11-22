<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="/assets/js/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" href="/assets/css/bulma.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">	
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
