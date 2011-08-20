<?php
if(
preg_match('#^((https?)://(?:([a-z0-9-.]+:[a-z0-9-.]+)@)?([a-z0-9-.]+)(?::([0-9]+))?)(?:/|$)((?:[^?/]*/)*)([^?]*)(?:\?([^\#]*))?(?:\#.*)?$#i', $_GET['url'], $tmp)
)
{
  $invalid = 0;
  $website = $_GET['url'];
}
else {
  $invalid = 1;
}
?>
<html>
<head>
   <title>Warning you are leaving tor2web</title>
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
    
   </style>
<link rel="stylesheet" type="text/css" href="tor2web.css">
</head>
<body>
<div id="wrap">
<img src="/proxyg7n6l6m302/themes/tor2web/tor2web-small.png" class="resized-logo">
<?php if($invalid == 1) {
?>
<h2>Invalid URL! (XSS Attempt?) </h2>
<?php
} else {
?>
<p class="tor2web-title">Warning: you're leaving tor2web to an external website.</p>

<div class="tor2web-text">
	<a href="<?php echo urldecode($website);?>">Click here to proceed to <?php echo htmlentities($website);?></a><br>
	it is advised to not click on the link as it will leak the referer, the site you are comming from.<br>
	For added privacy, you should copy the URL from the following textbox and paste it directly into your browser.
	<br><br>
</div>
<textarea class="tor2web-textarea"><?php echo urldecode($website);?></textarea>
<?php } ?>
</div>
</body>
</html>
