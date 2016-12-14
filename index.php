<!doctype html>
<html lang="en">

  <?php
  require("head.php")
  ?>


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
        <h2>Begin with wet skin in the shower—warm-to-hot water is ideal to soften the skin. Allow the shower to run for 5-10 minutes and let the warm water soften the skin and prepare for exfoliation.<br> Pause the running water while you exfoliate. Apply the sugar scrub in a circular motion. It is important to maintain a gentle pressure not to damage the skin. You can start wherever is most convenient and comfortable, whether this is from the feet up or from the arms down. Rinse it all off with lukewarm water. Don't scrub every day, avoid over-exfoliating by scrubbing just a couple times a week. If you have sensitive skin, consider a lighter touch.</h2>
    </div>
  </section>

  <section id="pumpkin">
    <div class="text-content">
      <h1>Pumpkin spice body scrub</h1>
      <h2>Perfect for all coffeelovers out there.... this sugarscrub is loaded with coffee and warm spiced to improve blood circulation and awaken tired and duff skin </h2>

      <a href="cart.php"><button type="buy-now" name="button">buy now</button></a>

      <h3>Ingredients</h3>

      <article class="ingredients">
        <h2>All ingredients are 100% organic,<br>no added preservatives or chemicals.</h2>
        <h3>coconut oil, sugar, coffee, spices, vitamin E oil, sweet almond oil</h3>
      </article>

      <img class="expand-arrow" src="images/icons/down-arrow.png" alt="down arrow">

    </div>

  </section>

  <section id="vanilla">

    <div class="text-content">
      <h1>Vanilla Cinnamon Body Scrub</h1>
      <h2>If you have a sweet tooth, then this is perfect for you... This anti-oxidant rich scrub does not only leave you skin smooth but also smelling like a piece of a perfect cookie!</h2>
      <a href="cart.php"><button type="buy-now" name="button">buy now</button></a>
      <h3>Ingredients</h3>

      <article class="ingredients">
        <h2>All ingredients are 100% organic,<br>no added preservatives or chemicals.</h2>
        <h3>Coconut oil, sugar, vitamin E oil, vanilla extract, sweet almond oil</h3>
      </article>

      <img class="expand-arrow" src="images/icons/down-arrow.png" alt="down arrow">

    </div>

  </section>


  <section id="pepermint">
    <div class="text-content">
      <h1>Pepermint sugar body scrub</h1>
      <h2>Tired legs? Let this peppermint infused scrub exfoliate your skin and sooth your tight muscles. Additionally the peppermint will help calm both your body and mind</h2>
      <a href="cart.php"><button type="buy-now" name="button">buy now</button></a>
      <h3>Ingredients</h3>

      <article class="ingredients">
        <h2>All ingredients are 100% organic,<br>no added preservatives or chemicals.</h2>
        <h3>Coconut oil, sugar, peppermint extract, peppermint essential oil, sweet almond oil</h3>
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
