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


  <!--Pumpkin spice body scrub section-->

  <section id="pumpkin">

    <div class="text-content">
      <h1>Pumpkin spice body scrub</h1>
      <h2>Perfect for all coffee lovers out there. This sugarscrub is loaded with coffee and warm spiced to improve blood circulation and awaken tired and duff skin.</h2>

      <a href="cart.php"><button type="buy-now" name="button">buy now</button></a>

      <h3>Ingredients</h3>

      <article class="ingredients">
        <h2>All ingredients are 100% organic,<br>no added preservatives or chemicals.</h2>
        <h3>coconut oil, sugar, coffee, spices, vitamin E oil, sweet almond oil</h3>
      </article>

      <img class="expand-arrow" src="images/icons/down-arrow.png" alt="down arrow">
    </div>

  </section>

  <!--End of section-->

  <!--Vanilla body scrub section-->

  <section id="vanilla">

    <div class="text-content">
      <h1>Vanilla Cinnamon Body Scrub</h1>
      <h2>If you have a sweet tooth, then this is perfect for you... This anti-oxidant rich scrub does not only leave your skin smooth but also smelling like a piece of a perfect cookie!</h2>
      <a href="cart.php"><button type="buy-now" name="button">buy now</button></a>
      <h3>Ingredients</h3>

      <article class="ingredients">
        <h2>All ingredients are 100% organic,<br>no added preservatives or chemicals.</h2>
        <h3>Coconut oil, sugar, vitamin E oil, vanilla extract, sweet almond oil</h3>
      </article>

      <img class="expand-arrow" src="images/icons/down-arrow.png" alt="down arrow">

    </div>

  </section>

  <!--End of section-->

  <!--Pepermint body scrub section-->

  <section id="pepermint">

    <div class="text-content">
      <h1>Pepermint sugar body scrub</h1>
      <h2>Tired legs? Let this peppermint infused scrub exfoliate your skin and sooth your tight muscles. Additionally the peppermint will help to calm both your body and mind</h2>
      <a href="cart.php"><button type="buy-now" name="button">buy now</button></a>
      <h3>Ingredients</h3>

      <article class="ingredients">
        <h2>All ingredients are 100% organic,<br>no added preservatives or chemicals.</h2>
        <h3>Coconut oil, sugar, peppermint extract, peppermint essential oil, sweet almond oil</h3>
      </article>

      <img class="expand-arrow rotate" src="images/icons/down-arrow.png" alt="down arrow">
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
