<?php get_header(); ?>
<?php include 'header-page.php'; ?>

	<!-- blog -->
	<div class="wrapper services-inside-wr">
		<div class="container services-inside">
			<h1 class="title"><?php the_title(); ?></h1>
			<br>
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	<!-- seporator -->
	<div class="container separator gallery">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="sep"><div class="sepimg"></div></div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>