<?php if ( has_post_thumbnail() ) {?>
	<div class="row">
		<div class="col-md-4">
			<?php	the_post_thumbnail('thumbnail'); ?>
		</div>
		<div class="col-md-6">
			<?php the_excerpt(); ?>
		</div>
	</div>
<?php } else { ?>
	<?php the_excerpt(); ?>
<?php } ?>

CONTENT-SINGLE.PHP
