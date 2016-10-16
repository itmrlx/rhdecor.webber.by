	<!-- footer -->
	<footer class="footer-b">
		<div class="container">
			<div class="row">
				<div class="col-xs-8 left">
					<div class="title">Мы в социальных сетях</div>
					<div class="desc">Подпишись и следи за новостями</div>
					<div class="col-xs-6">
						<script type="text/javascript" src="//vk.com/js/api/openapi.js?133"></script>

						<!-- VK Widget -->
						<div id="vk_groups"></div>
						<script type="text/javascript">
						VK.Widgets.Group("vk_groups", {mode: 5, width: "220", height: "290", color1: 'FFFFFF', color2: '000000', color3: '5E81A8'}, 48602225);
						</script>
					</div>
					<div class="col-xs-6">
						<?php echo do_shortcode('[instagram-feed]'); ?>
					</div>
				</div>
				<div class="col-xs-4 right">
					<div class="logo-container">
						<a href="/" class="logo"><img src="<?php the_field('logo','option'); ?>" alt="logo"></a>
					</div>
					<div class="contacts-container">
						<div class="title-c">Наши контакты</div>
						<div class="phones">
							<a href="tel:<?php echo str_replace(array(" ","(",")","-"),"",get_field(tel1,option)); ?>"><?php the_field('tel1','option'); ?></a>
							<a href="tel:<?php echo str_replace(array(" ","(",")","-"),"",get_field(tel2,option)); ?>"><?php the_field('tel2','option'); ?></a>
						</div>
						<a href="mailto:<?php the_field('email','option'); ?>" class="mail"><?php the_field('email','option'); ?></a>
					</div>
					<div class="copyright">
						<p class="webber">Разработка сайта<a href="http://webber.by"><img src="<?php bloginfo('template_url'); ?>/img/webber-gray.svg" alt="Webber создание сайтов">Webber Studio</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<div id="fform" style="display: none;">
		<form id="fform-form" class="form-class">
			<div class="modal-form-title">Обратная связь</div>
			<div class="form-group">
				<input class="form-control" id="namef" name="name" type="text" required />
				<label for="namef">Ваше имя *</label>
			</div>
			<div class="form-group">
				<input class="form-control" id="mailf" name="mail" type="email" />
				<label for="mailf">Email</label>
			</div>
			<div class="form-group">
				<input class="form-control" id="telf" name="tel" type="tel" required />
				<label for="telf">Ваш телефон *</label>
			</div>
			<div class="form-group">
				<textarea class="form-control" id="mesf" name="comment" cols="30" rows="5"></textarea>
				<label for="mesf">Сообщение</label>
			</div>
			<div class="form-group for-robots" style="display: none;">
				<input class="form-control" type="text" name="email" />
				<input class="form-control modal-form-value" type="text" name="title" />
			</div>
			<div class="centered">
				<button type="submit" class="btn btn-circle">Отправить</button>
			</div>
		</form>
	</div>

	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery-3.0.0-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery.fancybox-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/slick-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/script-min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>