<!doctype html>
<html lang="ENG">

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Indulgent Infusions</title>

  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- build:css styles/vendor.css -->
  <!-- bower:css -->
  <!-- endbower -->
  <!-- endbuild -->

  <!-- build:css styles/main.css -->
  <link rel="stylesheet" href="styles/main.css">
  <!-- endbuild -->

</head>


  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <?php
  require("menu.php");
  ?>

  <section id="cart-section">


      <div class="product-bar" id="pumpkin-prod">
        <img src="images/cart_pumpkin.jpg" alt="Pumpkin body scrub image">
        <h1>Pumpkin body scrub</h1>
        <h2>80DKK</h2>
        <h4 class="minus">-</h4>
        <h3 id="pumpkin-quantity">1</h3>
        <h4 class="plus">+</h4>
      </div>

      <div class="product-bar" id="vanilla-prod">
        <img src="images/cart_vanilla.jpg" alt="Vanilla body scrub image">
        <h1>Vanilla body scrub</h1>
        <h2>80DKK</h2>
        <h4 class="minus">-</h4>
        <h3 id="vanilla-quantity">1</h3>
        <h4 class="plus">+</h4>
      </div>

      <div class="product-bar" id="pepermint-prod">
        <img src="images/cart_pepermint.jpg" alt="Pepermint body scrub image">
        <h1>Pepermint body scrub</h1>
        <h2>80DKK</h2>
        <h4 class="minus">-</h4>
        <h3 id="pepermint-quantity">1</h3>
        <h4 class="plus">+</h4>
      </div>

      <div class="total">
        <h1>Total</h1>
        <h3 id="total">200DKK</h3><span>DKK</span>
      </div>

      <div class="contact">

        <h1>Contact Information</h1>

      </div>


        <form action="email.php" method="post">
          <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="user_name" />
          </div>
          <div>
            <label for="mail">E-mail:</label>
            <input type="email" id="mail" name="user_mail" />
          </div>
          <div>
            <label for="phone">Phone:</label>
            <input type="phone" id="phone" name="user_phone" />
          </div>

          <h3>I want to be contacted by</h3>

          <input type="checkbox" name="phone" value="contact by phone">phone<br>
          <input type="checkbox" name="mail" value="contact by mail" checked="checked">e-mail<br>

          <input type="hidden" name="pumpkin" id="form-pumpkin">
          <input type="hidden" name="vanilla" id="form-vanilla">
          <input type="hidden" name="pepermint" id="form-pepermint">
          <input type="hidden" name="total" id="form-total">

          <div class="button">
            <button type="submit">Place an order</button>
          </div>



        </form>





  </section>




  <?php
  require("footer.php");
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
    <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:js scripts/main.js -->

    <script src="scripts/js.cookie.js"></script>
    <script src="scripts/cart.js"></script>

    <!-- endbuild -->
  </body>
</html>