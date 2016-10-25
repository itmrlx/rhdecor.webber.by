<?php get_header(); ?>
<?php include 'header-page.php'; ?>

	<!-- blog -->
	<div class="wrapper portfolio-page-wr">
		<div class="container portfolio-page">
			<h1 class="title"><?php single_cat_title(); ?></h1>
			<div class="row">
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>

				<div class="col-xs-4">
					<div class="portfolio-item">
						<?php $addimg = get_field('add_img'); ?>
						<a href="<?php the_permalink(); ?>" class="img"><img src="<?php echo $addimg['sizes']['thumbnail']; ?>" alt="<?php echo $addimg['alt']; ?>"></a>
						<h2 class="title-b"><?php the_title(); ?></h2>
						<div class="desc"><?php the_field('mesto'); ?></div>
						<?php if(get_field('date')): ?>
							<div class="date"><?php the_field('date'); ?></div>
						<?php endif; ?>
						<div class="clearfix"></div>
						<a href="<?php the_permalink(); ?>" class="btn btn-circle">Подробнее</a>
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