<html>
<head>
  <title>Sending Photo</title>
  <link rel="stylesheet" href="css/mail.css" />
  <script type="text/javascript">
    function newLocation() {
        window.location.replace="http://localhost/site";
    }
  </script>
</head>
<body style="background-image: url('images/bg-01.jpg');">
  <div class="container" style="opacity:0.92">
  <form id="contact" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h3> &nbsp; Enter Email for sending</h3>
    <h3><center>Stylised Photo</center></h3>
    <fieldset>
      <input placeholder="Your name" name="sender_name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your subject here...." name="subject" tabindex="3" required></textarea>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." name="message" tabindex="4" required></textarea>
    </fieldset>
    <fieldset>
      <a href="http://localhost/site" target="_top" ><button name="button" type="submit" id="contact-submit" data-submit="...Sending" style="background: #3b3e45"><a href="http://localhost/site"  style="color: #fff" target="_top" >Submit</a></button></a>
    </fieldset>
  </form>
  </div>
</body>
</html>
