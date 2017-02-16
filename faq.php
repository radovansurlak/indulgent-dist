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

  <article id="faq">

    <h1>FAQ</h1>

    <?php


    $questions = array("Why is exfoliating your skin important?","What’s special about Indulgent Infusions sugar scrubs?","Why should I choose sugar scrubs instead of e.g. salt scrubs?","How often should I use the scrub?","How long will one 150g jar last me for?","What is the shelf life of the scrub?","What kind of perfume or fragrance is used in the scrubs since it smells so good?");
    $answers = array("Exfoliating your skin regularly has many benefits, most importantly you’ll be scrubbing off dead skin cells, unclogging pores, promoting quicker cell turnover, helping skin absorb moisture and nutrients as well as buffing skin and balancing out the skin’s oil production.","At Indulgent Infusions we believe that natural resources are the best and we strive to stay beautiful naturally. The first step in doing so is a regular skin exfoliation routine. Our sugar scrubs are organic, cruelty free and not mass produced hence, delivering the best product quality in every single jar.","Sugar granules dissolve more easily in hot water, and they are less abrasive than salt scrubs.","For the best results use it once or twice a week","One jar will last you at least 3 months, maybe more dependent how much and how often you use it.","The scrub is a 100% organic and doesn’t contain any form of preservatives therefore it has a short shelf life compared to commercial brands. Our sugar scrubs can last up to a year.","As we hold on to being a 100% chemical free, our fragrance are all food grade. So yes, our scrubs are edible too!");

    for ($x = 0; $x < count($questions); $x++) {
    echo "<h2>$questions[$x]</h2>";
    echo "<p>$answers[$x]</p>";
    }

    ?>

  </article>








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
