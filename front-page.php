<?php get_header(); ?>

<div class="jumbotron">
	<div class="container">
		<h1>Element Softworks</h1>
		<p>We're a premium development service for the firearms industry.</p>
	</div>
</div>

	<div class="row" style="margin: 5px;">

		<h1 class="intro">So, what do we do?</h1>
		<div class="col-sm-4">
			<div class="tile tile-dev">
				<h2>Web Development</h2>
				<h5 class="colour">For small to medium businesses</h5>
				<hr>
				<p>Whether it's responsive web design, brand creation, dashboards and databases or anything in between. We've been working for years to develop solutions for over a hundred trusted clients time and time again.</p>
				<a class="btn btn-default colour" href="#" role="button">View details »</a>
				<div class="row row-item">
					<div class="col-md-6 item-1" style="
						background: url('http://demo.elementsoftworks.co.uk/wordpress/wp-content/uploads/2017/01/site-ipua.png'); background-size: cover; ">
						<a class="info-box" href="#">
							View Project »
						</a>
					</div>
					<div class="col-md-6 item-2" style="
						background: url('http://demo.elementsoftworks.co.uk/wordpress/wp-content/uploads/2017/01/Wallpapers-1280x800.jpg'); background-size: cover; ">
						<a class="info-box" href="#">
							View Project »
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="tile tile-products">
				<h2>Create Products</h2>
				<h5 class="colour">Which we sell through Envato</h5>
				<hr>
				<p>Wordpress themes, PHP plugins, HTML and CSS designs. We're creating some awesome tools and code for people to buy at a fraction of the price it would normally cost to hire us for. Check out our ThemeForest and CodeCanyon products today.</p>
				<a class="btn btn-default colour" href="#" role="button">Our Profile »</a>
				<div class="row row-item">
					<div class="col-md-4 item-1" style="
						background: url('https://d13yacurqjgara.cloudfront.net/users/907682/screenshots/3076632/uichallange_popup_1x.png'); background-size: cover; ">
						<a class="info-box" href="#">
							View Project »
						</a>
					</div>
					<div class="col-md-4 item-1" style="
						background: url('https://d13yacurqjgara.cloudfront.net/users/548115/screenshots/3121853/e-mail-client-800x600-ui-challenge_1x.jpg'); background-size: cover; ">
						<a class="info-box" href="#">
							View Project »
						</a>
					</div>
					<div class="col-md-4 item-3" style="
						background: url('https://d13yacurqjgara.cloudfront.net/users/548115/screenshots/3202205/movie_ticket_reservation_ui_challenge___week_10___shot_1x.png'); background-size: cover; ">
						<a class="info-box" href="#">
							View Project »
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="tile tile-challenge">
				<h2>52 Week Challenge</h2>
				<h5 class="colour">One project each week</h5>
				<hr>
				<p>In the name of innovation and creativity, and to keep ourselves active and working - we've set ourselves a challenge to produce a new product or design each week for a whole year. We also take requests for our weekly challenge. </p>
				<a class="btn btn-default colour" href="#" role="button">Challenge Overview</a>
				<div class="row row-item">
					<div class="col-md-6 item-1" style="
						background: url('https://d13yacurqjgara.cloudfront.net/users/861437/screenshots/3158399/dribbble_week07_design_preview_3_1x.png'); background-size: cover; ">
						<a class="info-box" href="#">
							This Week »
						</a>
					</div>
					<div class="col-md-6 item-2" style="
						background: url('https://d13yacurqjgara.cloudfront.net/users/861437/screenshots/3144324/dribbble_challenge_ui_week6_800x600_1x.png'); background-size: cover; ">
						<a class="info-box" href="#">
							Last Week »
						</a>
					</div>
				</div>
			</div>
		</div>

	</div>

<!--
	<div class="row">
		<div class="col-sm-12">



			<?php


			$i = 0;

			if( have_rows('homepage_slider') ): ?>


			<?php while( have_rows('homepage_slider') ): the_row();

				if ($i == 0) {
				$item = "active";
				} else {
				$item = "";
				}
				$i++;

			?>

			<div class="item <?= $item; ?>">
				<div class="row">

					<div class="col-md-6 col-xs-12">
						<img src="<?= the_sub_field('project_screenshot'); ?>" width="100%" align="right">
					</div>
					<div class="col-md-6 col-xs-12">

						<h1><?php the_sub_field('project_title'); ?></h1>
						<h4><?php the_sub_field('project_text'); ?></h4>
						<a href="https://codecanyon.net/item/ip-and-user-agent-lookup-api-search-tool/16750113?s_rank=1"><button class="btn btn-red">See Demo / Purchase</button></a>
						<div class="carousel-caption">assets/img/blur-ipua.png</div>

					</div>



			</div>
			</div>
				<?php endwhile; ?>
			</div>
			</div>



			<?php endif; ?>
-->
<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-12">

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile; endif;
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->



<?php get_footer(); ?>
	<h1>PAGE-HOME.PHP</h1>