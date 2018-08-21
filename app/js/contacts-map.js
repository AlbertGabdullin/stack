(function() {
  ymaps.ready(init);
    function init(){ 
        // Создание карты.    
        var myMap = new ymaps.Map("contacts-map-block", {
            center: [55.76230821664418, 49.15643360931427],
            zoom: 13,
            controls: []
        });

        var myPlacemark = new ymaps.Placemark([55.76230821664418, 49.15643360931427], {
          // Хинт показывается при наведении мышкой на иконку метки.
          hintContent: 'STACK 24',
          // Балун откроется при клике по метке.
          balloonContent: `
                <div class="map-ballon">
                  <h4 class="ballon-header">STACK <span class="yellow">24</span> </h4>
                  <p class="ballon-description">Казань, ул. Оренбургский трактд. 5д</p>
                  <div class="ballon-field">
                    <strong>Tелефон: </strong> <a href="tel:+78432168465" class="u-text-dark u-td-none">+7 (843) 216-84-65</a>
                  </div>
                </div>
          `
        }, {
          iconLayout: 'default#imageWithContent',
          iconImageHref: '../img/map-pin.png',
          iconImageSize: [21, 31],
          iconImageOffset: [-24, -24],
        });
        
        // После того как метка была создана, ее
        // можно добавить на карту.
        myMap.geoObjects.add(myPlacemark);
    }
})();