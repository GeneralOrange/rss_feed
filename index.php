<!DOCTYPE html>
<head>
	<title>Simple RSS feed</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<div class="container">
		<?php include 'rss.php';?>
	</div>
	<div id="toggle_editor">
		<span class="arrow_left"><i class="fas fa-angle-left"></i></span>
		<span class="arrow_right"><i class="fas fa-angle-right"></i></span>
		<span class="cog"><i class="fas fa-cog"></i></span>
	</div>
	<div id="editor">
		<span class="close"><i class="fas fa-times"></i></span>
		<h2>Select theme</h2>
		<div class="themes">
			<ul>
				<li class="theme" id="default">Default</li>
			</ul>
		</div>
	</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>