<?php include 'header.php'; ?>
<?php include 'header-page.php'; ?>

	<div class="wrapper contacts-page-wr">
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="title">Оставьте заявку</div>
					<div class="desc">и наш менеджер свяжется в вами</div>
					<form id="form-contacts" class="form-class">
						<div class="form-group">
							<input class="form-control" id="name" name="name" type="text" required />
							<label for="name">Ваше имя *</label>
						</div>
						<div class="form-group">
							<input class="form-control" id="tel" name="tel" type="tel" required />
							<label for="tel">Номер телефона *</label>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="comment" id="mes" cols="30" rows="10" required></textarea>
							<label for="mes">Сообщение</label>
						</div>
						<div class="form-group for-robots" style="display: none;">
							<input class="form-control" type="text" name="email" />
							<input class="form-control modal-form-value" type="text" value="Страница Контакты" name="title" />
						</div>
						<div class="centered">
							<button type="submit" class="btn btn-circle">Отправить</button>
						</div>
					</form>
				</div>
				<div class="col-xs-8 contacts-icon">
					<div class="row">
						<div class="col-xs-4">
							<img src="img/location-c.svg" alt="location">
							<p>г. Минск, ул. М. Танка 12</p>
						</div>
						<div class="col-xs-4">
							<img src="img/phone-call-c.svg" alt="location">
							<a href="tel:+375 (25) 999-88-77">+375 (25) 999-88-77</a>
						</div>
						<div class="col-xs-4">
							<img src="img/location-c.svg" alt="location">
							<a href="mailto:info@wedding.by">info@wedding.by</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>