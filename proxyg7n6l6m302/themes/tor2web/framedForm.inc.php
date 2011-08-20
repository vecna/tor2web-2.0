<style type="text/css">
   /* Make room for the mini-form */
   html body { margin-top: 330px; }
   
   /* Reset all styles */
/*
   #include * {
      border: 0; padding: 0; margin: 0;
      font: 1em Verdana,Arial,Tahoma;
      color: #eee;
      font-weight: normal;
      background: transparent;
      text-decoration: none;
      display: inline;
   }
   #include p {
      margin: 0 0.2em 0.2em 0em;
      display: block;
   }
   #include b {
      font-weight: bold;
   }
   #include script {
      display:none;
   }
 */  
   /* Style the mini-form div */
   #include9feb363fa5ef614a8c5849afe9b9d826
   {
      text-align: center;
      border-top: 0.2em solid #ce6c1c;
      border-bottom: 0.2em solid #b4a011;
      font: 18px Verdana, Arial, Tahoma;
      color: black;
      /* background: #0b1933; */
      background: #f5f5f5;
      position: absolute;
      top:0; left:0;
      height: 280px;
      z-index: 100000;
      width: 100%;
   }

   #wrapper9feb363fa5ef614a8c5849afe9b9d826 {
     width: 800px;
     margin: 0 auto;
   }
   #include9feb363fa5ef614a8c5849afe9b9d826 #disclaimer
   {
      width: 70%;
   }
   #include9feb363fa5ef614a8c5849afe9b9d826 p {
      margin: 0;
      margin-bottom: 0.2em;
      border: 0;
      padding: 0;
   }
   #include9feb363fa5ef614a8c5849afe9b9d826 .resized-logo 
   {
      width: auto;
   }
/*
   #color-border {
      background: #440000;
      height: 0.3em;
      border-bottom: 0.1em solid #0e6c0c;
   }
*/
   #include9feb363fa5ef614a8c5849afe9b9d826 .left-align {
      text-align: left;
      font-size: 15px;
   }
   #include9feb363fa5ef614a8c5849afe9b9d826 .right-align {
      text-align: right;
      font-size: 14px;
   }
   
   #include9feb363fa5ef614a8c5849afe9b9d826 a { color: #ce6c1c; }
   #include9feb363fa5ef614a8c5849afe9b9d826 a:hover { color: #ccc; }
/* not used at the moment ?

   #include .url-input {
      padding: 0.2em;
      background: #eee;
      color: #111;
      border: 0.2em solid #ccc;
   }
   #include .url-input:focus {
      background: #fff;
      border: 0.2em solid #ce6c1c;
   }
   #include .url-button {
      font-weight: bold;
      border-style: outset;
      font-size: 11px;
      line-height: 10px;
   }
 ************************/

</style>
<script type="text/javascript">
   window.onload = function() {
     var results = document.cookie.match("hide=(.*?)(;|$)");
     console.log(results);
     if(results){
       if(results[1] == "true") {
        console.log("hiding");
        document.getElementById("include9feb363fa5ef614a8c5849afe9b9d826").style.display = 'none';
       }
     }
   }
   
   function hidebar() {
       document.cookie = "hide=true;";
       document.getElementById("include9feb363fa5ef614a8c5849afe9b9d826").style.display = 'none';
       console.log("hiding..");
       return false;
   }
</script>


<div id="include9feb363fa5ef614a8c5849afe9b9d826">
<div id="wrapper9feb363fa5ef614a8c5849afe9b9d826">
<?php
// Print form using variables (saves repeatedly opening/closing PHP tags)
// Edit as if normal HTML but escape any dollar signs
echo <<<OUT
<p id="disclaimer">

<p class="left-align">
	You are visiting a <a href="https://www.torproject.org/docs/tor-hidden-service.html.en">Tor Hidden Service</a> Website trough <a href="http://www.tor2web.org">Tor2web</a> Proxy.<br>
</p>
<img src="/proxyg7n6l6m302/themes/tor2web/tor2web-small.png" class="resized-logo">
<p class="left-align">
	Tor2web servers <b>are not hosting this web content</b> you are viewing.<br>
	Tor2web can identify the IP of visitors of this site, we strongly suggest to access this site directly with <a href="https://www.torproject.org/download/download.html.en">Tor Browser Bundle</a> to increase your anonimity and efficiency.
</p>

<p class="right-align">
	If you feel this website violate some kind of user policy or ethical code, you can fill an <a href="/proxyg7n6l6m302/contact.php?t=abuse">Abuse Complain</a>.<br>
	If you want to report a bug or a problem, you can Send us an <a href="/proxyg7n6l6m302/contact.php?t=problem">Error Notification</a>.
</p>

<p class="left-align">
	<noscript><b>javascript is required for hide this disclaimer, when enabled, you could:</b> </noscript>
	<i>Click <a href="#" onclick="hidebar()">here to hide this disclaimer</a>.</i> 
</p>

<div id="color-border"></div>
</p>
OUT;

?>
</div>
</div>

<!--[proxified]-->
