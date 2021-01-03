<!DOCTYPE HTML>
<html>
<head>
	<?php wp_head() ?>
</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="<?php home_url()?>">Law<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<?php echo wp_nav_menu(
							[
								'menu'      => 'Header',
								'container' => false,
								'walker'    => new Law_header_menu()
							]
						) ?>
					</div>
				</div>

			</div>
		</div>
	</nav>
