<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<meta name="author" content="">

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	<![endif]-->

	<?php wp_head();?>

	<script src="//use.typekit.net/bnt2qso.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
</head>

<body>

<nav class="navbar navbar-default navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
			        aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand animate" href="<?php bloginfo( 'wpurl' ); ?>">
				<img src='<?= get_site_icon_url(100); ?>'> <span><?php echo get_bloginfo( 'name' ); ?></span>
			</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php get_search_form(); ?>

			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</nav>
<nav class="navbar navbar-default navbar-inverse navbar-bottom">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
			        aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<?php wp_list_pages( '&title_li=' ); ?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</nav>

<div class="container">