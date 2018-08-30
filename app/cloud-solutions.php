<?php
  include 'header.php';
?>


	<section class="page-head wrap" style="background-image: url('/img/cloud-solutions.png');">
		<div class="container">
			<div class="breadcrumbs">
				<p>Главная</p>
				<a href="#" class="current-page">О компании</a>
			</div>
			<h1>Облачные решения</h1>
		</div>
	</section>

	<div class="page-content wrap">
		<div class="container align-item-center">
			<div class="page-content__left">
				<div>
					<img src="img/cloud-center.jpg" alt="">
				</div>
				<section class="partners">
					<div class="container align-item-center">
						<div class="partners__item">
							<img src="img/partners/cisco.png" alt="">
						</div>
						<div class="partners__item">
							<img src="img/partners/netapp.png" alt="">
						</div>
						<div class="partners__item">
							<img src="img/partners/vmware.png" alt="">
						</div>
						<div class="partners__item">
							<img src="img/partners/huawei.png" alt="">
						</div>
					</div>
				</section>
			</div>
			<div class="page-content__right">
				<p>
					Дата Центр STACK 24 предоставляет услугу по аренде вычислительных ресурсов (IAAS). Облачные решения STACK 24 это отказоустойчивая
					платформа для размещения IT инфраструктуры Клиента без необходимости в покупке собственных серверов, сетевых устройств,
					систем хранения данных, специализированного программного обеспечения. Наши Клиенты размещают у нас критичные данные
					и приложения, базы данных ORACLE, SAP, SQL, основные и резервные площадки , то есть все то, для чего требуется максимальная
					отказоустойчивость и доступность на уровне 99,9%. Пользуясь нашими услугами Вы получаете в свое распоряжение готовые
					и отвечающие высоким требованиям доступности вычислительные ресурсы с управлением через панель vCloud Director.
				</p>
				<h2>Архитектура облачной платформы STACK 24</h2>
				<p>
					Облачная инфраструктура Дата Центра STACK 24 построена исключительно на качественных и проверенных решениях производителей
					сетевого и серверного оборудования CISCO, Huawei, NetApp, размещенных в Дата Центре уровня TIER III. Серверная инфраструктура
					облачной платформы построена на основе блейд шасси и блейд серверов CISCO и Huawei на базе процессоров INTEL XEON E5
					2690v4. Системы хранения данных для облачной платформы реализованы на решениях NetApp FAS и AllFlash. Система виртуализации
					- VMware vCloud.
				</p>
			</div>
		</div>
	</div>

	<div class="page-content wrap">
		<div class="container">
			<div class="c-cloud-calculator">
				<div class="calculator-info">
					<h2>Соберите свою конфигурацию</h2>
					<div class="calculator-info-summ">
						<h3>
							<span class="info-summ-result">
								<span class="number">3600</span> P</span> /
							<span class="u-va-top info-summ-currency u-text-small">мес</span>
						</h3>
						<div class="u-text-muted u-text-small">С учетом НДС</div>
					</div>
					<div>
						<a href="#cloud-form" class="button calculator-button">Заказать</a>
					</div>
				</div>
				<div class="calculator-configs">

					<div class="configs-line configs-line-vcpu">
						<div class="configs-line-name">
							vCPU
						</div>
						<div class="configs-line-slider">
							<input type="range" class="cloud-calculator-slider" value="2" min="1" max="4">
						</div>
						<div class="configs-line-value">
							2
						</div>
						<div class="configs-line-currency">
							x 1.0
						</div>
					</div>

					<div class="configs-line configs-line-vram">
						<div class="configs-line-name">
							vRam
						</div>
						<div class="configs-line-slider">
							<input type="range" class="cloud-calculator-slider" value="8" min="1" max="16">
						</div>
						<div class="configs-line-value">
							2
						</div>
						<div class="configs-line-currency">
							Gb
						</div>
					</div>

					<div class="configs-line configs-line-vsas">
						<div class="configs-line-name">
							vSas
						</div>
						<div class="configs-line-slider">
							<input type="range" class="cloud-calculator-slider" value="16" min="1" max="64">
						</div>
						<div class="configs-line-value">
							2
						</div>
						<div class="configs-line-currency">
							Gb
						</div>
					</div>

					<div class="configs-line configs-line-vsata">
						<div class="configs-line-name">
							vSata
						</div>
						<div class="configs-line-slider">
							<input type="range" class="cloud-calculator-slider" value="244" min="1" max="256">
						</div>
						<div class="configs-line-value">
							2
						</div>
						<div class="configs-line-currency">
							Gb
						</div>
					</div>

					<div class="configs-line configs-line-internet">
						<div class="configs-line-name">
							Internet
						</div>
						<div class="configs-line-slider">
							<input type="range" class="cloud-calculator-slider" value="100" min="1" max="500">
						</div>
						<div class="configs-line-value">
							2
						</div>
						<div class="configs-line-currency">
							Mb/s
						</div>
					</div>

					<div class="configs-line configs-line-ipv4">
						<div class="configs-line-name">
							iPv4
						</div>
						<div class="configs-line-slider">
							<input type="range" class="cloud-calculator-slider" value="4" min="1" max="40">
						</div>
						<div class="configs-line-value">
							2
						</div>
						<div class="configs-line-currency">
							Шт
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="wrap">
		<div class="container">
			<div class="cloud-advantages">
				<h2>Наши преимущества</h2>

				<div class="cloud-advantages-content">
					<ul class="cloud-advantages-list">
						<li class="cloud-advantages-item">Высокий уровень доступности услуги, SLA - 99,9%</li>
						<li class="cloud-advantages-item">Серверные решения и Системы Хранения Данных проверенных производителей оборудования CISCO, Huawei, NetApp</li>
						<li class="cloud-advantages-item">Безлимитный интернет траффик с полосой пропускания до 10 Gbit/s</li>
						<li class="cloud-advantages-item">Экономичность: вы платите только за то, чем пользуетесь, снижая до минимума затраты на оборудование и ИТ</li>
						<li class="cloud-advantages-item">Помощь с выбором нужной платформы и расчетом необходимого объема ресурсов </li>
					</ul>

					<ul class="cloud-advantages-list">
						<li class="cloud-advantages-item">Возможность тонкой настройки с помощью панели vCLoud Director</li>
						<li class="cloud-advantages-item">Любые Операционные Системы Microsoftи Linux в аренду</li>
						<li class="cloud-advantages-item">Постоплатная схема расчетов</li>
						<li class="cloud-advantages-item">Эластичность: возможность быстро увеличивать или уменьшать объем используемых ресурсов в соответствии с потребностями</li>
						<li class="cloud-advantages-item">Предоставление сетевой связности на уровнях L2 или L3 c оборудованием в Вашей серверной</li>
					</ul>

					<ul class="cloud-advantages-list">
						<li class="cloud-advantages-item">Круглосуточная бесплатная техническая поддержка 24/7/365</li>
						<li class="cloud-advantages-item">Полностью готовая к работе виртуальная инфраструктура от 900 руб в мес</li>
						<li class="cloud-advantages-item">Тестовый период на 10 дней</li>
						<li class="cloud-advantages-item">Доступность: к облачным системам можно обращаться круглосуточно, из любого места и с любого устройства</li>
						<li class="cloud-advantages-item">Помощь в миграции с физической инфраструктуры, а также с инфраструктуры Microsoft HyperV силами наших специалистов</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<section class="page-contacts wrap">
		<div class="container">
			<div class="page-contacts__wrap">
				<div class="page-contacts__left">
					<div class="page-contacts__left-head">Возникли вопросы?</div>
					<div class="page-contacts__left-text">Позвоните нам
						<a href="tel:+7(843)216-84-65">+7 (843) 216-84-65</a> Или оставьте заявку и получите консультациюот специалиста!</div>
					<a href="" class="button">Позвоните мне</a>
				</div>
				<div class="page-contacts__right">
					<div class="page-contacts__right-photo" style="background-image: url('img/finker.jpg');"></div>
					<div class="your-master">
						<span>Ваше специалист</span>
						<div class="your-master__name">Финкер Михаил</div>
					</div>
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

	<div class="hidden">

		<div id="cloud-form" class="modal modal-2">
			<div class="modal-head modal--padding">
				<p>Оставьте заявку</p>
				<span>и в ближайшее время с вами свяжется наш специалист!</span>
			</div>
			<form class="modal__form-wrap">
				<div class="modal__form modal--padding">
					<div class="modal__form-left">
						<div class="modal__form-input">
							<label for="">Как к вам обращаться?</label>
							<input type="text" placeholder="Ваше имя">
						</div>

						<div class="modal__form-input">
							<label for="">Номер телефона</label>
							<input type="text" placeholder="+7 (___) ___ __ __">
						</div>

						<div class="modal__form-input">
							<label for="">Ваш e-mail</label>
							<input type="text" placeholder="Mymail@mail.ru">
						</div>

						<div class="modal__form-input">
							<label for="">Ваш комментарий</label>
							<textarea rows="5" placeholder="Введите комментарий"></textarea>
						</div>

						<div class="agree">
							<label class="flex-label">
								<input class="checkbox" type="checkbox" name="checkbox-agree">
								<span class="checkbox-custom"></span>
								<span class="label">Я даю свое согласие на использование предоставленных персональных данных в соответствии с Федеральным законом от
									27.07.2006 N 152-ФЗ "О персональных данных"</span>
							</label>
						</div>
					</div>
					<div class="modal__form-right">
						<div class="modal__form-right--top">

							<div class="modal__form-right-head">
								<p>Облачный хостинг</p>
								<span>Ваша конфигурация</span>
							</div>

							<ul class="leader-dots-list">
								<li>
									<p>vCPU</p>
									<span>2</span>
								</li>

								<li>
									<p>vRAM</p>
									<span>8</span>
								</li>

								<li>
									<p>vSAS</p>
									<span>36</span>
								</li>
								<li>
									<p>vSATA</p>
									<span>300</span>
								</li>
								<li>
									<p>SSD</p>
									<span>200</span>
								</li>
								<li>
									<p>Internet</p>
									<span>100</span>
								</li>
								<li>
									<p>IPv4</p>
									<span>4</span>
								</li>

							</ul>
						</div>

						<div class="modal__form-right--bottom">
							<p class="summ-text">Итого к оплате</p>
							<div class="summ-price">
								<p>
									<span class="yellow">3600 Р</span>
									<span>/</span>
									<sup>мес.</sup>
								</p>
								<p class="summ-price-nds">Стоимость с учетом НДС</p>
							</div>
						</div>
					</div>
				</div>
				<button class="button">Отправить заявку</button>
			</form>
		</div>
	</div>



<?php
  include 'footer.php';
?>  