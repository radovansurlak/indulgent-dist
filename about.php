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

  <!--Body part, with introductory sections-->

  <!--About section with description and portraits of the founders-->

  <section id="megan-cath">

    <!--Article about Megan-->

    <article id="megan">
      <img src="images/sections/megan.jpg" alt="Photo of Megan">
      <h1>Megan</h1>
      <p>
      I love to travel and explore the world since I believe that every journey you take makes you grow and discover the person they are meant to be. I am a very positive person and although I don't mind being sarcastic and making fun of the bad luck i have once in a while, I try to always see the world with a glass half full mentality.
      </p>
      <p>
      Whatever I decide to do, I am enthusiastic about it as well as try my best in it. My bank account can definitely confirm that I’m very passionate about both the beauty and fashion industry. I am always up for a challenge as well as eager and willing to learn while enjoying every minute of it!!!
      </p>
    </article>

    <!--End of article-->

    <!--Article about Catherina-->

    <article id="cath">
      <img src="images/sections/catherina.jpg" alt="Photo of Catherina">
      <h1>Catherine</h1>
      <p>
      If there is one thing I have to tell about myself, it is that I believe in destiny. I believe in everything around us happens for a reason. I am a very easy-going person who gets little pleasures out of everything. I love traveling without plans and exploring thousands of miles spread around the globe.</p>
      <p>
      I am a craft enthusiast and I have been always blessed with creativity. Being hungry for knowledge is another gift I got, and broadening my horizon with the knowledge of Ayurveda and its benefits made me realize how much we have forgotten our forefather's touch.
      </p>
    </article>

    <!--End of article-->

    </section>

  <!--End of section-->

  <!--Section with a banner image of both founders-->

  <section id="about-banner">
  </section>

  <!--End of section-->

  <!--Storytelling section-->

  <section id="story">

    <h1>Our story</h1>

    <article>
      <p>Coming from an Indian background I’ve always wondered why certain things are done the way they have been done. From the Sindoor on the forehead to the tradition of going around the Holy Basil tree every morning or the burning of incense sticks at home made me very curious.
      I have always been hungry for knowledge and constantly asked the question “Why?”
      </p>
      <p>
      Having many questions answered, I started my research on Ayurveda, which is the traditional Hindu system of medicine. I traveled and learned from family, friends and even strangers all the nuances of natural remedies the Indian traditions entail. Staying open-minded and inquisitive I continued my journey to gain understanding of the teachings that were discarded and forgotten by past generations.
      </p>
      <p>
      Taking their knowledge and experiences into account, I started a period of trials and errors to find solutions to stay healthy naturally.
      In Malaysia, I put effort into sharing my knowledge and helping people with natural remedies. My move to Denmark nevertheless strengthened my passion towards natural remedies and I plan to continue spreading the wisdom.
      Meeting Megan was an eye opening experience.
      </p>
      <p>
      I never thought that one could share so much in common while having just as many contrasting traits, which helped us overcome our weaknesses.
      Our friendship and mutual passion for staying beautiful naturally, made us decide to embark on this wonderful journey towards spreading Mother Nature’s precious gifts of natural wellbeing through Indulgent Infusions.
      </p>

      <h1>
      Welcome on board!<br>
      We hope that you’ll join us on this journey towards staying healthy naturally!
      </h1>

    </article>

  </section>

  <!--End of storytelling section-->

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
    <script src="scripts/product-counting.js"></script>
    <script src="scripts/effects.js"></script>
    <!-- endbuild -->

    <!--End of scripts-->
  </body>
</html>
