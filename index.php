<?php include("includes/header.php"); ?>


<!-- Custom HTML Start -->

<!-- Main Section Start-->
<section id="main" class="section-main">
  <div class="container-fluid p-0 fullheight">
    <div class="row g-0 fullheight">

      <!-- Main Section Intro Start -->
      <div id="intro" class="col-12 col-xl-9 section-main__intro">

        <!-- Intro Media Start -->
        <div class="intro__media">

          <!-- Main Section Image Background Start -->
          <div class="media__image media-mono-02"></div>
          <!-- Main Section Image Background End -->

          <!-- Background Effect Start -->
          <div class="video-background">
            <video id="main-video" preload="auto" autoplay="autoplay" loop="loop" muted="muted"
              poster="assets/images/bg-image.jpg">
              <source type="video/mp4" src="assets/video/welcome.mp4">
              <!-- <source type="video/webm" src="video/video.webm"> -->
              <!-- <source type="video/ogv" src="video/video.ogv"> -->
            </video>
          </div>
          <!-- Background Effect End -->

          <!-- Main Section Color Layer Start -->
          <div class="color-layer color-layer-dark"></div>
          <!-- Main Section Color Layer End -->

        </div>
        <!-- Intro Media End -->

        <!-- Success Alert -->
        <?php if (array_key_exists('message', $_GET)): ?>
          <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
              class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
              <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
            <div style="font-size: 1.8em;z-index: 10">
              <strong>Success</strong> -
              <?= $_GET['message'] ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        <?php endif; ?>


        <!-- Intro Header Start -->
        <div class="intro__header">

          <!-- Logo Start -->
          <div class="logo">
            <img src="assets/images/logo.png" alt="Site Logo">
          </div>
          <!-- Logo End -->

          <!-- Menu Trigger Start - Visible on Mobile 
          <a href="#0" id="menu-trigger" class="menu-trigger">
            <i class="fa-solid fa-bars"></i>
          </a>-->
          <!-- Menu Trigger End - Visible on Mobile -->

        </div>
        <!-- Intro Header End -->

        <!-- Navigation Start -->
        <div id="menu" class="menu">

          <?php include("includes/navigation.php"); ?>

        </div>
        <!-- Navigation End -->

        <!-- Intro Headline Start -->

        <div class="intro__headline">

          <p class="headline__subtitle"></p>
          <br>
          <br>
          <!-- Animated Headline Start -->
          <h1 class="headline__title clip">
            <span class="words-wrapper">
              <b class="is-visible">BUILDING ON PROGRESS</b>
    
              <b>DRIVING NEW CHANGE</b>
              <b>REGISTRATION NOW OPEN</b>
            </span>
          </h1>
          <!-- Animated Headline End -->

          <p class="headline__description">The 55th PLP Convention will be held November
            9th-10th in Nassau, Bahamas at The Baha Mar Resort. </p>

          <div class="headline__btnholder">
            <!-- <a href="#" class="button button-solid-light" id="notify-trigger"> -->

            <!-- Add some space here 

              <a href="#" class="button button-solid-light transition-el transition-el-5 inner-trigger"
                id="about-trigger">
                <span class="button-caption"><center>NEW MEMBERS <br> REGISTRATION</center></span>
                </a>-->

<!-- Add some space here -->
            <a href="#" class="button button-solid-light transition-el transition-el-5 inner-trigger"
              id="works-trigger">
              <span class="button-caption"><center>PLP ID CARD HOLDERS<br> REGISTRATION (CHECK-IN)</center></span>
              </a>

<!-- Add some space here -->

              <a href="#" class="button button-solid-light transition-el transition-el-5 inner-trigger"
                id="about-trigger">
                <span class="button-caption"><center>NON PLP CARD <br> REGISTRATION</center></span>
                </a>

<!-- Add some space here -->


                 <a href="uploads/Lynden-Pindling-Jubilee-Award.pdf" class="button button-solid-light transition-el transition-el-5 inner-trigger" id="#">
                  <span class="button-caption"><center>LYNDEN PINDLING JUBILEE <br>  AWARD NOMINATION</center></span>
                </a>

          </div>

        </div>
        <!-- Intro Headline End -->

        <!-- Intro Countdown Start -->
        <?php include("includes/footer.php"); ?>
        <!-- Intro Сopyright End -->

      </div>
      <!-- Main Section Intro End -->

      <!-- Main Section Aside Start -->
      <div class="col-12 col-xl-3 section-main__aside">
        <?php include("includes/login.php"); ?>

      </div>
      <!-- Main Section Aside End -->

    </div>
  </div>
</section>
<!-- Main Section End -->
<!-- About Us Section Start -->
<section id="about" class="section-inner about">
  <?php include("pages/local-register.php"); ?>
</section>


<!-- Our Works Section Start -->
<section id="works" class="section-inner works">
  <?php include("pages/delegate-register.php"); ?>

</section>
<!-- Our Works Section End -->



<!-- Contact Section Start -->

<section id="contact" class="section-inner contact">
  <?php include("pages/media-register.php"); ?>
</section>
<!-- Contact Section End -->

<!-- Notify Section Start -->
<div id="notify" class="section-inner notify">

   
</div>
<!-- Notify Content End -->

</div>
</div>
</div>
</div>
<!-- Notify Section End -->

<!-- Custom HTML End -->

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

  <!-- Background of PhotoSwipe.
      It's a separate element, as animating opacity is faster than rgba(). -->
  <div class="pswp__bg"></div>

  <!-- Slides wrapper with overflow:hidden. -->
  <div class="pswp__scroll-wrap">

    <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
    <!-- don't modify these 3 pswp__item elements, data is added later on. -->
    <div class="pswp__container">
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
    </div>

    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
    <div class="pswp__ui pswp__ui--hidden">

      <div class="pswp__top-bar">

        <!--  Controls are self-explanatory. Order can be changed. -->

        <div class="pswp__counter"></div>

        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

        <button class="pswp__button pswp__button--share" title="Share"></button>

        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

        <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
        <!-- element will get class pswp__preloader--active when preloader is running -->
        <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
            <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
        <div class="pswp__share-tooltip"></div>
      </div>

      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
      </button>

      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
      </button>

      <div class="pswp__caption">
        <div class="pswp__caption__center"></div>
      </div>

    </div>

  </div>

</div>



</body>

</html>