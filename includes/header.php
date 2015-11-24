<!DOCTYPE html>
<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.html"><img class="logo" src="images/logo.png" width="513" height="84" alt="" title=""></a>
			<a href="index.html"><img  src="images/waitress.png" width="332" height="205" alt="" title=""></a>
			<ul class="navigation">
				<?=MakeLinks($nav1,'<li>','</li>','<li class="active">')?>
			</ul>
		</div>
	</div>
	<div id="body">
		<div id="content">
			<div>
				<div>
<!-- End of Header-->				