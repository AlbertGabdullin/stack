
<?php
	include 'header.php';
?>

  <section class="page-head wrap" style="background-image: url('/img/arenda.png');">
    <div class="container">
      <div class="breadcrumbs">
        <p>Главная</p>
        <a href="" class="current-page">Дополнительные услуги</a>
      </div>
      <h1>Дополнительные услуги</h1>
    </div>
  </section>

  <div class="tile-section wrap">
    <div class="container">
      <div class="tile-items">

        <div class="tile__item">
          <div class="tile__item-content">
            <div class="tile__item-icon">
              <img src="img/icons/icon1.svg" alt="">
            </div>
            <h3 class="tile__item-head">Резервное копирование</h3>
            <div class="tile__item-text">Разнообразный и богатый опыт рамки и место обучения кадров требуют определения и уточнения систем массового участия.</div>
          </div>
          <div class="tile__item-footer">
            <div class="tile__item-footer-button">
              <a href="#" class="button">Узнать подробнее</a>
            </div>
          </div>
        </div>

        <div class="tile__item">
          <div class="tile__item-content">
            <div class="tile__item-icon">
              <img src="img/icons/icon1.svg" alt="">
            </div>
            <h3 class="tile__item-head">Аренда программного обеспечения Microsoft</h3>
            <div class="tile__item-text">Разнообразный и богатый опыт рамки и место обучения кадров требуют определения и уточнения систем массового участия.</div>
          </div>
          <div class="tile__item-footer">
            <div class="tile__item-footer-button">
              <a href="#" class="button">Узнать подробнее</a>
            </div>
          </div>
        </div>

        <div class="tile__item">
          <div class="tile__item-content">
            <div class="tile__item-icon">
              <img src="img/icons/icon1.svg" alt="">
            </div>
            <h3 class="tile__item-head">Аренда программного обеспечения Microsoft</h3>
            <div class="tile__item-text">Разнообразный и богатый опыт рамки и место обучения кадров требуют определения и уточнения систем массового участия.</div>
          </div>
          <div class="tile__item-footer">
            <div class="tile__item-footer-button">
              <a href="#" class="button">Узнать подробнее</a>
            </div>
          </div>
        </div>
        <div class="tile__item">
          <div class="tile__item-content">
            <div class="tile__item-icon">
              <img src="img/icons/icon1.svg" alt="">
            </div>
            <h3 class="tile__item-head">Аренда серверной ячейки</h3>
            <div class="tile__item-text">Разнообразный и богатый опыт рамки и место обучения кадров требуют определения и уточнения систем массового участия.</div>
          </div>
          <div class="tile__item-footer">
            <div class="tile__item-footer-button">
              <a href="#" class="button">Узнать подробнее</a>
            </div>
          </div>
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
      <div class="link-block__items link-block__items--three">
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
          <div class="link-block__item-head">Полезные статьи</div>
          <a href="" class="link-block__item-link read-more">Перейти</a>
        </div>
        <div class="link-block__item link-block__item--blue">
          <div class="link-block__item-icon">
            <img src="img/icons/cloud.svg" alt="">
          </div>
          <div class="link-block__item-head">Облачные решения</div>
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
              <span class="label">Я даю свое согласие на использование предоставленных персональных данных в соответствии с Федеральным законом
                от 27.07.2006 N 152-ФЗ "О персональных данных"</span>
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