<?php get_header(); ?>
<?php include 'header-page.php'; ?>

	<!-- blog -->
	<div class="wrapper page-wr">
		<div class="container blog">
			<h1 class="title"><?php single_cat_title(); ?></h1>
			<div class="row">
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>

				<div class="col-xs-4">
					<a href="<?php the_permalink(); ?>" class="blog-item">
						<?php $addimg = get_field('add_img'); ?>
						<div class="img"><img src="<?php echo $addimg['sizes']['thumbnail']; ?>" alt="<?php echo $addimg['alt']; ?>"></div>
						<h2 class="title-b"><?php the_title(); ?></h2>
						<div class="desc"><?php echo wp_trim_words(get_the_content(),15,'...'); ?></div>
						<span class="more">Подробнее...</span>
					</a>
				</div>

				<?php endwhile; ?>
				<div class="clearfix"></div>
				<div class="centered">
					<?php if(function_exists('proPagination')) { proPagination(); } ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- seporator -->
	<div class="container separator">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="sep"><div class="sepimg"></div></div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>