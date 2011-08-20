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
   <style type="text/css">
html,body {
      text-align: center;
      border-top: 0.2em solid #ce6c1c;
      font: 1em Verdana, Arial, Tahoma;
      color: black;
      /* background: #0b1933; */
      background: #f5f5f5;
      position: absolute;
      top:0; left:0;
      height: 250px;
      z-index: 100000;
      width: 100%;   margin: 0; padding: 0;
}
      #wrap {
         width: 500px;
         margin: 0 auto;
      }
      
      table {
      } 
     
      table input {
         width: 220px;
      } 
   </style>
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
<h1>You are informing us of a <?php echo $type;?></h1>
<p>You are going to file a <b><?php echo $type;?></b> complaint with Tor2web. Tor2web is not hosting any kind of content but just acts as a proxy to Tor Hidden Services. Even if we block access to that content via the Tor2web proxy the content will be still accessible by using a Tor client. We know that Tor2web may be used also to publish illegal content. Tor2web does not endorse illegal content and is willing to block any illegal material that could be internet-exposed through Tor2web. However, to be again very clear, even if we block it through tor2web, the content will still be accessible via the .onion URL from a Tor enabled browser</p>
<form action="" method="POST">
<table>
<tr><td>Tor2web URL:</td><td><input type="text" name="url"/></td></tr>
<tr><td>Contact of reporter (email):</td><td><input type="text" name="email"/></td></tr>
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
