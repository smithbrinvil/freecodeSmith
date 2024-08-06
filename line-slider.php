<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('meta/include.php')?>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <!-- LINE SLIDER -->
  <div class="my-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="slider-div">
            <ul id="lightSlider">
              <li>
                <div class="h-custom-div-center b-center" style="
                      background-image: url('https://demo.tmrwstudio.net/atlas/two/wp-content/uploads/sites/3/2023/09/a19-1200x800.jpeg');
                    ">
                  <div class="overlay-div">
                    <div class="overlay-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Sit, excepturi at iure corrupti totam magnam.
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="h-custom-div-center b-center" style="background-image: url('https://demo.tmrwstudio.net/atlas/two/wp-content/uploads/sites/3/2023/09/a4.jpeg')">
                  <div class="overlay-div">
                    <div class="overlay-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Sit, excepturi at iure corrupti totam magnam.
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="h-custom-div-center b-center" style="
                      background-image: url('https://demo.tmrwstudio.net/atlas/two/wp-content/uploads/sites/3/2023/09/a17-768x512.jpeg');
                    ">
                  <div class="overlay-div">
                    <div class="overlay-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Sit, excepturi at iure corrupti totam magnam.
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <div class="d-center">
              <div class="bar-container">
                <div class="bar-content"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Bar for the lighSLider -->

    </div>
  </div>

  <script type="module">
  import {
    bigSLider
  } from "./js/slide.js";
  import {
    animateSlideRange
  } from "./js/animateslide.js";

  let slider = $("#lightSlider");
  const bar = document.querySelector(".bar-content");

  bigSLider(slider, false, false, "fade", 1);



  function animateSLiderRange() {
    setInterval(() => {
      var widthVal = window
        .getComputedStyle(bar, null)
        .getPropertyValue("width");
      if (widthVal == "0px") {
        bar.style.transition = "2.5s";
        bar.style.width = "100%";
      } else {
        slider.goToNextSlide();
        bar.style.transition = "0s";
        bar.style.width = "0";
      }
    }, 2500);
  }
  animateSLiderRange()
</script>
</body>
</html>