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
  require("menu.php")
  ?>

  <section id="intro">
    <div class="text-content">
      <h1>Beauty made with love</h1>
      <h2>Vexillologist cardigan enamel pin, mustache cred tacos forage kitsch post-ironic yuccie DIY freegan meditation. Humblebrag coloring book affogato cornhole, man bun wayfarers raclette skateboard chambray messenger bag. Migas affogato hashtag bicycle rights. Pork belly sartorial 8-bit waistcoat, bitters coloring book echo park everyday carry migas franzen lomo aesthetic intelligentsia. Tilde chia hot chicken single-origin coffee try-hard. Put a bird on it</h2>
      <a href="#pumpkin"><button>explore our products</button></a>
    </div>
  </section>

  <section id="how-to">
    <div class="text-content">
        <h1>How to use body scrubs?</h1>
        <h2>Pinterest copper mug ea meggings, farm-to-table keffiyeh schlitz tumblr coloring book unicorn minim. Irony edison bulb fixie echo park DIY mustache, ramps chicharrones reprehenderit slow-carb sriracha assumenda offal cliche. Humblebrag odio selvage, ethical nihil accusamus direct trade. Knausgaard dolor activated charcoal, +1 green juice freegan gochujang semiotics meggings gastropub bespoke fap humblebrag. Waistcoat godard subway tile flexitarian delectus normcore. Mollit dolore air plant cliche, VHS neutra master cleanse tacos health goth. Readymade flexitarian meh, glossier offal minim art party.</h2>
    </div>
  </section>

  <section id="pumpkin">
    <div class="text-content">
      <h1>Pumpkin spice body scrub</h1>
      <h2>Perfect for all coffeelovers out there.... this sugarscrub is loaded with coffee and warm spiced to improve blood circulation and awaken tired and duff skin </h2>

      <button type="buy-now" name="button">buy now</button>

      <h3>Ingredients</h3>

      <article class="ingredients">
        <h2>All ingredients are 100% organic,<br>no added preservatives or chemicals.</h2>
        <h3>coconut oil, cinnamon, vanilla, white sugar, vitamin E</h3>
      </article>

      <img class="expand-arrow" src="images/icons/down-arrow.png" alt="down arrow">

    </div>

  </section>

  <section id="vanilla">

    <div class="text-content">
      <h1>Vanilla Cinnamon Body Scrub</h1>
      <h2>If you have a sweet tooth, then this is perfect for you... This anti-oxidant rich scrub does not only leave you skin smooth but also smelling like a piece of a perfect cookie!</h2>
      <button type="buy-now" name="button">buy now</button>

      <h3>Ingredients</h3>

      <article class="ingredients">
        <h2>All ingredients are 100% organic,<br>no added preservatives or chemicals.</h2>
        <h3>coconut oil, cinnamon, vanilla, white sugar, vitamin E</h3>
      </article>

      <img class="expand-arrow" src="images/icons/down-arrow.png" alt="down arrow">

    </div>

  </section>


  <section id="pepermint">
    <div class="text-content">
      <h1>Pepermint sugar body scrub</h1>
      <h2>Tired legs? Let this peppermint infused scrub exfoliate your skin and sooth your tight muscles. Additionally the peppermint will help calm both your body and mind</h2>
      <button type="buy-now" name="button">buy now</button>

      <h3>Ingredients</h3>

      <article class="ingredients">
        <h2>All ingredients are 100% organic,<br>no added preservatives or chemicals.</h2>
        <h3>coconut oil, cinnamon, vanilla, white sugar, vitamin E</h3>
      </article>

      <img class="expand-arrow rotate" src="images/icons/down-arrow.png" alt="down arrow">


    </div>

    </div>

  </section>

  <?php require("footer.php") ?>



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
    <script src="scripts/main.js"></script>
    <script src="scripts/product-counting.js"></script>
    <!-- endbuild -->
  </body>
</html>
