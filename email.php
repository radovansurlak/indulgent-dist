<?php

  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $name = $_POST["name"];
  $text = "Message from $name: ";
  $text .= $_POST["text"];

  $to      = 'radovansurlak@gmail.com';
  $headers = "From: $email" . "\r\n" .
    'Reply-To: radovansurlak@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $text, $headers);
?>


  <form id="successMessage" action="contact.php" method="post">
    <input type="hidden" name="message" value="sent" />
  </form>

  <script type="text/javascript">
    document.getElementById('successMessage').submit();
  </script>
