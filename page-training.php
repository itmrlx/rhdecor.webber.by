<?php /*
template name: Обучение
*/ ?>
<?php get_header(); ?>
<?php include 'header-page.php'; ?>

	<!-- blog -->
	<div class="wrapper services-inside-wr">
		<div class="container services-inside training-page">
			<h1 class="title"><?php the_title(); ?></h1>
			<div class="content-container">
				<?php the_field('cont1'); ?>
				<div class="clearfix"></div>
			</div>
			<div class="row">
				<div class="col-xs-8 content-container left">
					<?php the_field('cont2'); ?>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 right">
					<div class="white-training">
						<div class="title-t">Подробнее о курсе</div>
						<div class="row">
							<div class="col-xs-8 date"><span>Дата начала</span></div>
							<div class="col-xs-4"><?php the_field('bl1'); ?></div>
						</div>
						<div class="row">
							<div class="col-xs-8 date2"><span>Дата окончания</span></div>
							<div class="col-xs-4"><?php the_field('bl2'); ?></div>
						</div>
						<div class="row">
							<div class="col-xs-8 plan"><span>План проведения</span></div>
							<div class="col-xs-4"><?php the_field('bl3'); ?></div>
						</div>
						<div class="row">
							<div class="col-xs-8 time"><span>Длительность</span></div>
							<div class="col-xs-4"><?php the_field('bl4'); ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="centered">
				<a href="#fform" class="btn btn-circle fancybox" onclick="fform('Оставить заявку на обучение','<?php the_title(); ?>');">Оставить заявку</a>
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