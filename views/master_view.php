<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>EMÜ turniirirakendus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="KHK">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>


	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css"/>
	<style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
	</style>

	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css" rel="stylesheet">
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=ASSETS_URL?>ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=ASSETS_URL?>ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=ASSETS_URL?>ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?=ASSETS_URL?>ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="<?= ASSETS_URL ?>ico/favicon.png">
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="brand" href="#">EMÜ turniirirakendus</a>

			<div class="nav-collapse collapse">
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="<?= BASE_URL ?>auth/logout">Logout</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
</div>

<div class=" container-fluid">

	<? require 'views/'.$_request->controller.'_'.$_request->action.'_view.php'?>


</div>
<!-- /container -->

<!-- Le javascript
================================================== -->
<script>BASE_URL='<?=BASE_URL?>'</script>
<?if (! empty($this->scripts)) : ?>
	<? foreach ($this->scripts as $script) : ?>
		<script src="<?=ASSETS_URL?>js/<?= $script ?>"></script>
	<? endforeach ?>
<? endif?>
</body>
</html>
