(function() {

  var fields = {
    vcpu: 0,
    vram: 0,
    vsas: 0,
    vsata: 0,
    internet: 0,
    ipv4: 0
  };
  var resultSumm = 0

  function setResultSumm(changes) {
    fields = Object.assign({}, fields, changes);
    var result = (Number(fields.vcpu) * Number(fields.vram) * Number(fields.vsas) + 
                  Number(fields.vsata) + Number(fields.internet) * Number(fields.ipv4));

    if (result !== resultSumm) {
      $('.c-cloud-calculator .info-summ-result .number').text(result);
      resultSumm = result;
    }
  }

  function initSliders(fields) {
    return fields.map((field) => {

      var configLine = $(`.configs-line-${field}`);
      var slider = configLine.find('.cloud-calculator-slider');

      slider.rangeslider({
        polyfill : false,
        onInit: function() {
          configLine.find('.configs-line-value').text(slider.val());
          configLine.find('.rangeslider__handle')
                    .html(`<div class='rangeslider__handle-content'>${slider.val()}</div>`);

          var valueObj = {};
          valueObj[field] = slider.val();
          setResultSumm(valueObj)
        },
        onSlide: function(position, value) {
          configLine.find('.rangeslider__handle-content').text(value);
          configLine.find('.configs-line-value').text(value);

          var valueObj = {};
          valueObj[field] = slider.val();
          setResultSumm(valueObj)
        }
      });
    });
  }

  initSliders(Object.keys(fields));
})();