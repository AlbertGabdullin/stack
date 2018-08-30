<?php
  include 'header.php';
?>


	<section class="page-head wrap" style="background-image: url('/img/contacts-header.png'); background-position: 90% -40px;">
		<div class="container">
			<div class="breadcrumbs">
				<p>Главная</p>
				<a href="" class="current-page">О компании</a>
			</div>
			<h1>Наши контакты</h1>
		</div>
	</section>

	<section class="page-content wrap">
		<div class="container">
			<div class="c-contacts-block u-mb-60">
				<div class="contacts-info">
					<div class="contacts-info-field">
						<h3>Адрес</h3>
						<p>Казань, ул. Оренбургский тракт д. 5д</p>
					</div>
					<div class="contacts-info-field">
						<h3>Время работы</h3>
						<p>круглосуточно 24/7/365</p>
					</div>
					<div class="contacts-info-field">
						<h3>Телефоны для связи</h3>
						<div>
							<a href="tel:+78432494944" class="u-text-dark u-td-none">+7 (843) 249 49 44 (Центр продаж)</a>
						</div>
						<div>
							<a href="tel:+78432101901" class="u-text-dark u-td-none">+7 (843) 2-101-901 </a>
						</div>
					</div>
					<div class="contacts-info-field">
						<h3>E-mail для связи</h3>
						<div>
							<a href="mailto:sales@stack24.ru">sales@stack24.ru</a> (Центр продаж)
						</div>
						<div>
							<a href="mailto:support@stack24.ru">support@stack24.ru</a> (Техподдержка)
						</div>
					</div>
				</div>
				<div class="contacts-map">
					<!-- Yandex map is going to be here -->
					<div id="contacts-map-block"></div>
				</div>
			</div>
		</div>

	</section>

	<section class="link-block wrap">
		<div class="container">
			<div class="link-block__items">
				<div class="link-block__item">
					<div class="link-block__item-icon">
						<img src="img/icons/cloud.svg" alt="">
					</div>
					<div class="link-block__item-head">Вернуться на главную</div>
					<a href="" class="link-block__item-link read-more read-more--reverse">Назад</a>
				</div>
				<div class="link-block__item">
					<div class="link-block__item-icon">
						<img src="img/icons/cloud.svg" alt="">
					</div>
					<div class="link-block__item-head">Размещение серверов (co-location)</div>
					<a href="" class="link-block__item-link read-more">Перейти</a>
				</div>
				<div class="link-block__item">
					<div class="link-block__item-icon">
						<img src="img/icons/cloud.svg" alt="">
					</div>
					<div class="link-block__item-head">Аренда выделенного сервера</div>
					<a href="" class="link-block__item-link read-more">Перейти</a>
				</div>
				<div class="link-block__item">
					<div class="link-block__item-icon">
						<img src="img/icons/cloud.svg" alt="">
					</div>
					<div class="link-block__item-head">Дополнительные услуги</div>
					<a href="" class="link-block__item-link read-more">Перейти</a>
				</div>
			</div>
		</div>
	</section>

	<div class="border-buttons">

		<div class="language-buttons">
			<a class="active" href="#">Ru</a>
			<a href="#">En</a>
		</div>

		<div class="ip-button">
			<a href="#"></a>
		</div>

		<div class="border-contacts">
			<a href="#callback-form" class="border-phone"></a>
			<a href="" class="border-mail"></a>
		</div>

		<div class="search-button">
			<a href="#search-modal" class="search-button-modal-trigger"></a>
		</div>

	</div>


	<div class="hidden">
		<div id="callback-form" class="callback-modal modal modal--padding">
			<div class="modal-head">
				<p>Оставьте заявку</p>
				<span>и в ближайшее время с вами свяжется наш специалист!</span>
			</div>
			<form class="callback-modal__form">
				<div class="callback-modal__form-input">
					<label for="">Как к вам обращаться?</label>
					<input type="text" placeholder="Ваше имя">
				</div>

				<div class="callback-modal__form-input">
					<label for="">Номер телефона</label>
					<input type="text" placeholder="+7 (___) ___ __ __">
				</div>

				<div class="callback-modal__form-input">
					<label for="">Ваш e-mail</label>
					<input type="text" placeholder="Mymail@mail.ru">
				</div>

				<div class="callback-modal__form-input">
					<label for="">Ваш комментарий</label>
					<textarea rows="5" placeholder="Введите комментарий"></textarea>
				</div>

				<div class="callback-modal__form-footer">
					<div class="agree">
						<label class="flex-label">
							<input class="checkbox" type="checkbox" name="checkbox-agree">
							<span class="checkbox-custom"></span>
							<span class="label">Я даю свое согласие на использование предоставленных персональных данных в соответствии с Федеральным законом от 27.07.2006
								N 152-ФЗ "О персональных данных"</span>
						</label>
					</div>
					<div class="form-button">
						<button class="button" type="submit">Отправить заявку</button>
					</div>
				</div>
			</form>
		</div>

		<div id="search-modal" class="modal callback-modal search-modal">
			<div class="callback-modal__head">
				<p>Поиск по сайту</p>
			</div>
			<form class="callback-modal__form">
				<div class="callback-modal__form-input">
					<input type="text" placeholder="Начните вводить" class="search-modal-control">
				</div>
				<button class="button">Начать поиск</button>
			</form>
		</div>
	</div>


<?php
	include 'footer.php';
?>