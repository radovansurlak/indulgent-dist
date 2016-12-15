<!doctype html>
<html lang="en">

  <!--Head HTML section required by PHP-->

  <?php
  require("php_require/head.php")
  ?>

  <!---->

  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!--Menu bar required by PHP-->

  <?php
  require("php_require/menu.php")
  ?>

  <!---->

  <!--Product selection section-->

  <section id="cart-section">

    <!--Product quantity section-->

    <div class="product-bar" id="pumpkin-prod">
      <img src="images/cart/cart_pumpkin.jpg" alt="Pumpkin body scrub image">
      <h1>Pumpkin body scrub - 150g</h1>
      <h2>80DKK</h2>
      <h4 class="minus">-</h4>
      <h3 id="pumpkin-quantity">1</h3>
      <h4 class="plus">+</h4>
    </div>

    <div class="product-bar" id="vanilla-prod">
      <img src="images/cart/cart_vanilla.jpg" alt="Vanilla body scrub image">
      <h1>Vanilla body scrub - 150g</h1>
      <h2>80DKK</h2>
      <h4 class="minus">-</h4>
      <h3 id="vanilla-quantity">1</h3>
      <h4 class="plus">+</h4>
    </div>

    <div class="product-bar" id="pepermint-prod">
      <img src="images/cart/cart_pepermint.jpg" alt="Pepermint body scrub image">
      <h1>Pepermint body scrub - 150g</h1>
      <h2>80DKK</h2>
      <h4 class="minus">-</h4>
      <h3 id="pepermint-quantity">1</h3>
      <h4 class="plus">+</h4>
    </div>

    <!---->

    <!--Total price section-->

    <div class="total">
      <h1>Total</h1>
      <h3 id="total">200DKK</h3><span>DKK</span>
    </div>

    <!---->

    <!--Contact form section-->

    <!--Contact heading-->

    <div class="contact">
      <h1>Contact Information</h1>
    </div>

    <!---->

    <!--PHP form-->

    <form action="email.php" method="post">

      <!--Text inputs-->

      <label for="name">Name:</label>
      <input type="text" id="name"  name="user_name" required>


      <label for="mail">E-mail:</label>
      <input type="text" id="mail" required name="user_mail" required>

      <label for="phone">Phone:</label>
      <input type="text" id="phone" required name="user_phone" required>

      <!--End of inputs-->

      <h3>I want to be contacted by</h3>

      <!--Checkboxes-->

      <input type="checkbox" name="phone" value="by phone">phone<br>
      <input type="checkbox" name="mail" value="by mail" checked="checked">e-mail<br>

      <!--End of checkboxes-->

      <!--These hidden inputs render Javascript variables available to PHP form-->
      <!--Variables include product quantity and total order amount-->

      <input type="hidden" name="pumpkin" id="form-pumpkin">
      <input type="hidden" name="vanilla" id="form-vanilla">
      <input type="hidden" name="pepermint" id="form-pepermint">
      <input type="hidden" name="total" id="form-total">

      <!--End of hidden -->

      <button type="submit">order now</button>

    </form>

    <!--End of PHP form-->

  </section>

  <?php
  require("php_require/footer.php");
  ?>

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
    <script src="scripts/cart.js"></script>

    <!-- endbuild -->

    <!--End of scripts-->
  </body>
</html>
