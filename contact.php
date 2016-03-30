<?php $thisPage = 'contact'; ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Moling Guo - Contact</title>
    <?php include 'pageHeader.php'; ?>
  </head>
  <body>
	<?php include 'nav.php'; ?>
  <div class="row contactWrap">
  <div class="large-5 small-8 columns large-centered small-centered">
      <div class="sayHello">Say Hello to Moling!</div>
      <form name="contact" action="mail.php" method="POST" class="contactform">
        <div class="row">
          <div class="large-12 columns">
            <label class="inputlabel">NAME
              <input name="inputname" class="inputtext" type="text" placeholder="Happy to know you!" required/> 
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <label class="inputlabel">EMAIL
              <input name="inputemail" class="inputtext" type="text" placeholder="moling@example.com"/> 
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <label class="inputlabel">SUBJECT
              <input name="inputsubject" class="inputtext" type="text" placeholder="Enter subject here." /> 
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <label class="inputlabel">MESSAGE
              <textarea name="inputmessage" class="inputtext" cols="30" rows="10" placeholder="Let's rock our stories!" required></textarea>
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <input type="submit" value='Submit' class="button contactsubmit">
          </div>
        </div>
      </form>
      <script>
        $('contactform').validate();
      </script>
    </div>
  </div>
	<?php include 'siteFooter.php'; ?>
  </body>
</html>
