<!doctype html>
<html lang="en">


  <?php
  require("php_require/head.php")
  ?>

  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <?php
  require("php_require/menu.php");
  ?>

  <!---->

  <section id="contact">

    <article id="contact-text">
      <h1>Do you have any questions or comments?</h1>
      <h2>Leave us a message and we'll get back to you within 2-3 days</h2>
      <h4>E-mail:</h4><p>hi@indulgentinfusions.com</p>

      <h3 id="email-sent">
        <?php
          if(isset($_POST["message"])){
            echo "E-mail was sent, thank you :)";
          };
        ?>
      </h3>

    </article>

    <article id="contact-form">
      <form class="" action="email.php" method="post">

        <input type="text" name="name" placeholder="Name:">
        <input type="email" name="email" placeholder="E-mail:">
        <input type="text" name="subject" placeholder="Subject:">
        <textarea name="text" rows="8" cols="80" placeholder="Message:"></textarea>

        <button type="submit">send</button>

      </form>
    </article>



  </section>





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
    <script src="scripts/product-counting.js"></script>
    <script src="scripts/effects.js"></script>
    <!-- endbuild -->

    <!--End of scripts-->
  </body>
</html>
