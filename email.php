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


  <?php

  $name = $_POST['user_name'];
  $mail = $_POST['user_mail'];
  $phone = $_POST['user_phone'];
  $prefers_phone = $_POST['phone'];
  $prefers_mail = $_POST['mail'];
  $pumpkin = $_POST['pumpkin'];
  $vanilla = $_POST['vanilla'];
  $pepermint= $_POST['pepermint'];
  $total= $_POST['total'];

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
  $message .= "Best regards,\n\n";
  $message .= "www.indulgentinfusions.com :)";


  echo $message;



  mail("radovansurlak@gmail.com","New Product Order",$message);

  ?>

  <section id="thank-you">
    <div class="text-content">
      <h1>Thank you for your support :)</h1>
      <h2>We'll contact you as soon as possible ;)</h2>
    </div>
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
    <script src="scripts/eat-all-cookies.js"></script>

    <!-- endbuild -->
  </body>
</html>
