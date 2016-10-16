<?php include 'header.php'; ?>
<?php include 'header-page.php'; ?>

	<!-- blog -->
	<div class="wrapper services-inside-wr">
		<div class="container services-inside">
			<h1 class="title"><?php the_title(); ?></h1>
			<div class="img">
				<?php $addimg = get_field('add_img'); ?>
				<img src="<?php echo $addimg['url']; ?>" alt="<?php echo $addimg['alt']; ?>">
			</div>
			<div class="content">
				<?php the_content(); ?>
			</div>
			<div class="centered">
				<a href="#fform" class="btn btn-circle fancybox" onclick="fform('<?php the_title(); ?>','<?php the_title(); ?>');">Заказать</a>
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
<?php include 'footer.php'; ?>