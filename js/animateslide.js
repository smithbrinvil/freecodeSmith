/**
 * Function that anminate a lightSlider with a bar range
 * @param {HTMLElement} b 
 * @param {number} sT 
 * @param {number} sS 
 * @param {HTMLElement} sl
 */
export function animateSlideRange(b ,sT , sS ,sl){
    setInterval(() => {
        let widthVal = window.getComputedStyle(b, null).getPropertyValue("width");
        if (widthVal == "0px") {
          b.style.transition = `${sT}s`;
          b.style.width = "100%";
        } else {
          sl.goToNextSlide();
          bar.style.transition = "0s";
          bar.style.width = "0";
        }
      }, sS);
}