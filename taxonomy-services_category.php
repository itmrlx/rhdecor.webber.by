<?php get_header(); ?>
<?php include 'header-page.php'; ?>

	<!-- blog -->
	<div class="wrapper portfolio-page-wr">
		<div class="container services-page">
			<h1 class="title">Наши услуги</h1>
			<div class="row">
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>

					<div class="col-xs-4 services-item">
						<div class="services-white">
							<div class="img">
								<?php $addimg = get_field('add_img'); ?>
								<img src="<?php echo $addimg['url']; ?>" alt="<?php echo $addimg['alt']; ?>">
							</div>
							<hr>
							<div class="title-b"><?php the_title(); ?></div>
						</div>
						<div class="desc"><?php echo wp_trim_words(get_the_content(),40,'...'); ?></div>
						<div class="centered">
							<a href="<?php the_permalink(); ?>" class="btn btn-circle">Узнать больше</a>
						</div>
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