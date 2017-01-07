<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-12">


			<?php


			$i = 0;

			if( have_rows('homepage_slider') ): ?>

				<!-- The slider -->
				<div class="top"></div>
				<div id="backing" style="background-image: url(assets/img/blur-ipua.png);" class="blur"></div>
				<div class="container row">
					<div class="row">
							<div id="merlinslider" class="carousel slide" data-interval="3000" data-ride="carousel">
								<!-- Carousel indicators -->
								<ol class="carousel-indicators">
									<li data-target="#merlinslider" data-slide-to="0" class="active"></li>
									<li data-target="#merlinslider" data-slide-to="1"></li>
									<li data-target="#merlinslider" data-slide-to="2"></li>
									<!--<li data-target="#merlinslider" data-slide-to="2"></li>-->
								</ol>
								<!-- Carousel items -->
								<div class="carousel-inner">


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
								<!-- Carousel nav -->
								<a class="merlin-slider left" href="#merlinslider" data-slide="prev">
									<span class="fa fa-2x fa-chevron-left"></span>
								</a>
								<a class="merlin-slider right" href="#merlinslider" data-slide="next">
									<span class="fa fa-2x fa-chevron-right"></span>
								</a>
							</div>
					</div>
				</div>



			<?php endif; ?>

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