/**
 * 
 * @param {HTMLElement} sliderMain 
 * @param {Boolean} control 
 * @param {boolean} automatic 
 * @param {string} chooseMode 
 * @param {number} nChoose 
 */

export  function bigSLider(sliderMain, control, automatic, chooseMode, nChoose) {
  sliderMain.lightSlider({
    item: nChoose,
    mode: chooseMode,
    autoWidth: false,
    slideMargin: 10,
    pager: false,
    keyPress: false,
    speed: 800, //ms'
    auto: automatic,
    pause: 3000,
    loop: true,
    controls: control,
    pauseOnHover: true,
    enableTouch: false,
    responsive: [
      {
        breakpoint: 565,
        settings: {
          item: 1,
        },
      },
    ],
  });
}

