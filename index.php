<!doctype html>
<html lang="en">

  <?php
  require("php_require/head.php")
  ?>


  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!--Menu bar required by PHP-->

  <?php
  require("php_require/menu.php")
  ?>

  <!---->

  <!--Body part, with all the content sections-->

  <!--Introductory section-->

  <section id="intro">
    <div class="text-content">
      <h1>Stay Beautiful Naturally With Our homemade body scrubs</h1>
      <h2>At Indulgent Infusions we believe that natural resources are the best. Going back to the teachings of our ancestors, it is believed to restore and rejuvenate your body and mind whilst enhancing the natural beauty of your skin. Our products are organic and cruelty free. Made with passion and powered by a mission to stay beautiful naturally.</h2>
      <a href="products.php"><button>explore our products</button></a>
    </div>
  </section>

  <!--End of section-->

  <!--Introductory section-->

  <section id="how-to">
    <div class="text-content">
        <h1>How to use body scrubs?</h1>
        <ul>
          <li>For the best results, use the scrub after a shower.</li>
          <li>Spread a generous amount of scrub on your skin and very lightly massage in a circular motion, rinse of with warm water.</li>
          <li>Your skin needs exfoliation at most 2 times a week.</li>
          <li>Over scrubbing is highly not recommended.</li>
        </ul>
    </div>
  </section>

  <!--End of section-->

  <!--Footer required by PHP-->

  <?php require("php_require/footer.php") ?>

  <!--End of section-->


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <!-- build:js scripts/vendor.js -->
    <!-- bower:js -->

    <!--jQuery CDN-->

    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>

    <!-- endbower -->
    <!-- endbuild -->

    <!--Scripts-->

    <!-- build:js scripts/main.js -->
    <script src="scripts/js.cookie.js"></script>
    <script src="scripts/effects.js"></script>
    <script src="scripts/product-counting.js"></script>
    <!-- endbuild -->

    <!--End of scripts-->
  </body>
</html>
