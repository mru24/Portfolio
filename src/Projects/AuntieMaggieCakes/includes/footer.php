<div id="contact" class="space"></div>

<div class="hr"><img src="img/hr.png" alt=""></div>

<div class="container">
  <footer>
    <h5>
      <i class="small material-icons">record_voice_over</i>
      Question? Just ask..
    </h5>
    <div class="row message">
      <form class="col s12" action="" method="post">
        <div class="row">
          <div class="input-field col s6">
            <label for="name">Your name</label>
            <input type="text" id="name" name="name" value="">
          </div>
          <div class="input-field col s6">
            <label for="email">Your email</label>
            <input type="email" id="email" name="email" value="">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <label for="mobile">Your mobile number</label>
            <input type="tel" id="mobile" name="mobile" value="">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea name="message" id="message" class="materialize-textarea"></textarea>
            <label for="message">Message</label>
          </div>
        </div>
        <div class="row">
          <button class="btn waves-effect waves-light center-align" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
      <?php

      // Check for header injection
      function has_header_injection($str) {
        return preg_match("/[\r\n]/", $str);
      }

        if (isset ($_POST['submit'])) {
          $name = trim($_POST['name']);
          $email = trim($_POST['email']);
          $email = trim($_POST['mobile']);
          $msg = $_POST['message'];

          // Check to see if $name or $email have header injection

          if (has_header_injection($name) || has_header_injection($email) || has_header_injection($mobile)) {
            die(); // If true, kill the script
          }

          if (!$name || !$email || !$mobile || !$msg) {
            echo '<h4 class="error">All fields required.</h4><a href="index.php#contact" class="backButton">Go back and try again</a>';
            exit;
          }

          // Add the recipient email to a variable
          $to = "mru24@yahoo.com";

          // Create a subject
          $subject = "$name sent you a message about FutureDesigns";

          // Construct the message
          $message  = "Name: $name\r\n";
          $message .= "Email: $email\r\n";
          $message .= "Mobile: $mobile\r\n";
          $message .= "Message:\r\n$msg";

          $message = wordwrap($message, 72);

          // Set the mail headers to a variable
          $headers  = "MIME-Version: 1.0\r\n";
          $headers .="Content-type: text/plain; charset=iso-8859-1\r\n";
          $headers .="From: $name <$email>\r\n";
          $headers .="From: $mobile\r\n";
          $headers .="X-Priority: 1\r\n";
          $headers .="X-MSMail-Priority: High\r\n\r\n";

          // Send the email
          mail($to, $subject, $message, $headers);

?>

    <!--  Show succes message after email has sent -->


      <div class="row center-align">
        <h2>Thanks for contacting us</h2>
        <p>Please allow 24 hours for a response</p>
        <a href="index.php" class="backButton">&laquo; Back to Home Page</a>
      </div>


<?php } else {

}
?>
    </div>

    <div class="hr"><img src="img/hr.png" alt=""></div>

    <div id="contact" class="center-align">
      <div class="facebook contact">
        <a href="https://www.facebook.com" target="_blank">
          <h4>Follow me: <img src="img/social/fb.png" alt="Facebook Icon"></h4>
        </a>
      </div>
      <div class="mobile contact">
        <h5><i class="small material-icons">phone</i>07999-456-554</h5>
      </div>
      <div class="address contact">
        <h5><i class="small material-icons">add_location</i>
          Address: 15 Somewhere in Doncaster
        </h5>
      </div>
    </div>
  </footer>
</div>

<div id="scrollToTop"><a href="#top"><img src="img/scrollToTop.png" alt=""></a></div>

<div class="made-by">
  <a href="http://wwproject.c0.pl" target="_blank">
    &copy; WW Project Studio <?php echo date('Y'); ?>
  </a>
</div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/lightbox.min.js" charset="utf-8"></script>
    <script src="js/main.js"></script>

</body>
</html>
