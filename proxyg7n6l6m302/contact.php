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
<link rel="stylesheet" type="text/css" href="tor2web.css">
</head>

<body>
<div id="wrap">
<img src="/proxyg7n6l6m302/themes/tor2web/tor2web-small.png" class="resized-logo">
<?php
if(isset($_POST['send'])) {
   $to = $CONFIG['email'];
   $subject = "[" . $type . "PAGE] " . $_POST['url'];
   $body = "URL: " . $_POST['url'] . "\nreported by: " . $_POST['email'] . "\n\n" . $_POST['content'] . "\n\n";

   if(mail($to, $subject, $body)) {
      echo "<br>";
      echo $type . " notification sent!";
   }
   else {
      echo "<br>";
      echo "failed sending message!";
   }
}

else {
?>
<div class="tor2web-title">You are informing us of a <?php echo $type;?></div>

<p class="tor2web-text">You are going to file a <b><?php echo $type;?></b> complaint with Tor2web. Tor2web is not hosting any kind of content but just acts as a proxy to Tor Hidden Services. Even if we block access to that content via the Tor2web proxy the content will be still accessible by using a Tor client. We know that Tor2web may be used also to publish illegal content. Tor2web does not endorse illegal content and is willing to block any illegal material that could be internet-exposed through Tor2web. However, to be again very clear, even if we block it through tor2web, the content will still be accessible via the .onion URL from a Tor enabled browser</p>
<form action="" method="POST">
<table>
<tr><td>Tor2web URL:</td><td><input type="text" class="tor2web-textarea" name="url"/></td></tr>
<tr><td>Contact of reporter (email):</td><td><input type="text" class="tor2web-textarea" name="email"/></td></tr>
<tr><td>Motivation of complaint:</td><td><textarea cols="30" rows="10" name="content"></textarea></td></tr>
<tr><td><input type="submit" name="send"/></td></tr>
</table>
</form>

<?php
}
?>
</div>
</body>
</html>
