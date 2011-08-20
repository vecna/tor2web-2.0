<?php
include("includes/settings.php");
if($_GET['t'] == "abuse") {
  $type = "ABUSE";
}
else {
  $type = "PROBLEM";
}
?>
<html>
<head>
   <title>Contact the tor2web node maintainer</title>
</head>

<body>

<?php
if(isset($_POST['send'])) {
   $to = $CONFIG['email'];
   $subject = "[" . $type . "PAGE]" . $_POST['url'];
   $body = "URL: " . $_POST['url'] . "\nreported by: " . $_POST['email'] . "\n\n" . $_POST['content'] . "\n\n";

   if(mail($to, $subject, $body)) {
      echo $type . " notification sent!";
   }
   else {
      echo "failed sending message!";
   }
}

else {
?>
<p>You are going to file an abuse complaint with Tor2web. Tor2web is not hosting any kind of content but just acts as a proxy to Tor Hidden Services. Even if we block access to that content via the Tor2web proxy the content will be still accessible by using a Tor client. We know that Tor2web may be used also to publish illegal content. Tor2web does not endorse illegal content and is willing to block any illegal material that could be internet-exposed through Tor2web. However, to be again very clear, even if we block it through tor2web, the content will still be accessible via the .onion URL from a Tor enabled browser</p>
<form action="" method="POST">
Tor2web URL: <input type="text" name="url"/>
Contact of reporter (email): <input type="text" name="email"/>
Motivation of complaint: <textarea name="content"></textarea>
<input type="submit" name="send"/>
</form>

<?php
}
?>

</body>
</html>
