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

  <!--PHP form handling-->

  <?php

    //Saving $_POST variables

    $name = $_POST['user_name'];
    $mail = $_POST['user_mail'];
    $phone = $_POST['user_phone'];
    $prefers_phone = $_POST['phone'];
    $prefers_mail = $_POST['mail'];
    $pumpkin = $_POST['pumpkin'];
    $vanilla = $_POST['vanilla'];
    $pepermint= $_POST['pepermint'];
    $total= $_POST['total'];

    //Message building for PHP mail() function

    $message = "Hi there :) You have just received a new product order.\n\n";
    $message .= "Here are the customer details: \n\n";
    $message .= "Name: ".$name."\n";
    $message .= "E-mail: ".$mail."\n";
    $message .= "Phone number: ".$phone."\n\n";
    $message .= "Order details: \n\n";
    $message .= "Pumpkin spice quantity: ".$pumpkin."\n";
    $message .= "Vanilla quantity: ".$vanilla."\n";
    $message .= "Pepermint quantity: ".$pepermint."\n";
    $message .= "Total price: ".$total." DKK"."\n\n";

    /*
    This conditional alters the message according to what checkboxes
    were selected on form submission in cart.php
    */

    if (!empty($prefers_phone) && !empty($prefers_mail))
    {
      $message .= $name." would like to be contacted by both phone and e-mail."."\n\n";
    } else if (!empty($prefers_phone))
    {
      $message .= $name." prefers to be contacted by phone."."\n\n";
    } else if (!empty($prefers_mail))
    {
      $message .= $name." prefers to be contacted by e-mail."."\n\n";
    };

    //End of conditional

    $message .= "Best regards,\n\n";
    $message .= "www.indulgentinfusions.com :)";

    //Execution of mail function

    mail("radovansurlak@gmail.com","New Product Order",$message);

  ?>

  <!--Section with a thank you message-->

  <section id="thank-you">
    <div class="text-content">
      <h1>Thank you for your support :)</h1>
      <h2>We'll contact you as soon as possible ;)</h2>
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
    crossorigin="anonymous">
    </script>

    <!-- endbower -->
    <!-- endbuild -->

    <!--Scripts-->

    <!-- build:js scripts/main.js -->
    <script src="scripts/js.cookie.js"></script>
    <script src="scripts/effects.js"></script>
    <script src="scripts/eat-all-cookies.js"></script>
    <!-- endbuild -->

    <!--End of scripts-->
  </body>
</html>
