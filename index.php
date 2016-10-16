<?php get_header(); ?>

	<!-- header -->
	<header class="wrapper header-t">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 left-container">
					<div class="text">
						<a href="/" class="logo">
							<img src="<?php the_field('logo','option'); ?>" alt="logo">
						</a>
						<div class="burger-menu">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<?php 
							$args = array(
								'theme_location'  => 'main-menu',
								'container'       => '', 
								'menu_class'      => 'pro-menu', 
							);
							wp_nav_menu( $args );
						?>
						<a href="#callback" class="btn btn-transparent fancybox">Получить звонок</a>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-xs-10 right-container">
					<div class="slider-top">
						<?php if( have_rows('slide','option') ):while ( have_rows('slide','option') ) : the_row(); ?>
							<div class="slide">
								<div class="text">
									<?php the_sub_field('slide_content'); ?>
								</div>
							</div>
						<?php endwhile;endif; ?>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- about -->
	<div class="wrapper about-wr">
		<div class="container">
			<div class="col-xs-6 left">
				<?php $mservimg = get_field('m_serv_img','option'); ?>
				<img src="<?php echo $mservimg['sizes']['large']; ?>" alt="<?php echo $mservimg['alt']; ?>">
				<div class="centered">
					<a href="#fform" class="btn btn-circle fancybox" onclick="fform('Получить консультацию','Получить консультацию');">Получить консультацию</a>
				</div>
			</div>
			<div class="col-xs-5 col-xs-offset-1 list">
				<?php the_field('m_serv_text','option'); ?>
			</div>
		</div>
	</div>

	<!-- portfolio -->
	<div class="container portfolio-container">
		<div class="title">ПОРТФОЛИО</div>
		<div class="portfolio-row">
			<?php 
				$mp1 = get_field('m_p_img1','option');
				$mp2 = get_field('m_p_img2','option');
				$mp3 = get_field('m_p_img3','option');
				$mp4 = get_field('m_p_img4','option');
				$mp5 = get_field('m_p_img5','option');
				$mp6 = get_field('m_p_img6','option');
				$mp7 = get_field('m_p_img7','option');
				$mp8 = get_field('m_p_img8','option');
				$mp9 = get_field('m_p_img9','option');
			 ?>
			<div class="pp p35"><a href="<?php echo $mp1['sizes']['large']; ?>" style="background-image: url(<?php echo $mp1['sizes']['medium']; ?>);" class="img fancybox" data-fancybox-group="main-portfolio"></a></div>
			<div class="pp p25"><a href="<?php echo $mp2['sizes']['large']; ?>" style="background-image: url(<?php echo $mp2['sizes']['medium']; ?>);" class="img fancybox" data-fancybox-group="main-portfolio"></a></div>
			<div class="pp p40"><a href="<?php echo $mp3['sizes']['large']; ?>" style="background-image: url(<?php echo $mp3['sizes']['medium']; ?>);" class="img fancybox" data-fancybox-group="main-portfolio"></a></div>
			<div class="pp p26"><a href="<?php echo $mp4['sizes']['large']; ?>" style="background-image: url(<?php echo $mp4['sizes']['medium']; ?>);" class="img fancybox" data-fancybox-group="main-portfolio"></a></div>
			<div class="pp p40"><a href="<?php echo $mp5['sizes']['large']; ?>" style="background-image: url(<?php echo $mp5['sizes']['medium']; ?>);" class="img fancybox" data-fancybox-group="main-portfolio"></a></div>
			<div class="pp p34"><a href="<?php echo $mp6['sizes']['large']; ?>" style="background-image: url(<?php echo $mp6['sizes']['medium']; ?>);" class="img fancybox" data-fancybox-group="main-portfolio"></a></div>
			<div class="pp p35"><a href="<?php echo $mp7['sizes']['large']; ?>" style="background-image: url(<?php echo $mp7['sizes']['medium']; ?>);" class="img fancybox" data-fancybox-group="main-portfolio"></a></div>
			<div class="pp p25"><a href="<?php echo $mp8['sizes']['large']; ?>" style="background-image: url(<?php echo $mp8['sizes']['medium']; ?>);" class="img fancybox" data-fancybox-group="main-portfolio"></a></div>
			<div class="pp p40"><a href="<?php echo $mp9['sizes']['large']; ?>" style="background-image: url(<?php echo $mp9['sizes']['medium']; ?>);" class="img fancybox" data-fancybox-group="main-portfolio"></a></div>
			<div class="clearfix"></div>
		</div>
		<div class="centered">
			<a href="/partfolio_category/galereya-rabot/" class="btn btn-circle">Смотреть всё</a>
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

	<!-- why we -->
	<div class="wrapper why-we-wr">
		<div class="container">
			<div class="title">Почему стоит выбрать нас?</div>
			<div class="row">
				<?php if( have_rows('adv','option') ):while ( have_rows('adv','option') ) : the_row(); ?>
					<div class="col-xs-4">
						<img src="<?php the_sub_field('adv_img'); ?>" alt="icon">
						<div class="title-b"><?php the_sub_field('adv_title'); ?></div>
						<div class="desc"><?php the_sub_field('adv_text'); ?></div>
					</div>
				<?php endwhile;endif; ?>
			</div>
			<div class="centered">
				<a href="#fform" class="btn btn-circle fancybox" onclick="fform('Расчитать стоимость праздника','Расчитать стоимость праздника');">Расчитать стоимость праздника</a>
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

	<!-- our team -->
	<div class="wrapper our-team">
		<div class="container">
			<div class="title">Наша команда</div>
			<div class="row">
				<?php if( have_rows('team','option') ):while ( have_rows('team','option') ) : the_row(); ?>
					<div class="col-xs-3 team">
						<?php $teamimg = get_sub_field('team_img'); ?>
						<img src="<?php echo $teamimg['sizes']['team']; ?>" alt="<?php echo $teamimg['alt']; ?>">
						<div class="name"><?php the_sub_field('team_name'); ?></div>
						<div class="dol"><?php the_sub_field('team_dol'); ?></div>
					</div>
				<?php endwhile;endif; ?>
			</div>
		</div>
	</div>

	<div id="callback" style="display: none;">
		<form id="fform-call" class="form-class">
			<div class="modal-form-title">Получить звонок</div>
			<div class="form-group">
				<input class="form-control" id="namefc" name="name" type="text" required />
				<label for="namefc">Ваше имя *</label>
			</div>
			<div class="form-group">
				<input class="form-control" id="telfc" name="tel" type="tel" required />
				<label for="telfc">Ваш телефон *</label>
			</div>
			<div class="form-group for-robots" style="display: none;">
				<input class="form-control" type="text" name="email" />
				<input class="form-control modal-form-value" type="text" name="title" value="Получить звонок" />
			</div>
			<div class="centered">
				<button type="submit" class="btn btn-circle">Получить звонок</button>
			</div>
		</form>
	</div>

<?php get_footer(); ?>