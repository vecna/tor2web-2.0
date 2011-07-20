<style type="text/css">
   /* Make room for the mini-form */
   html body { margin-top: 60px; }
   
   /* Reset all styles */
   #include * {
      text-align: left;
      border: 0; padding: 0; margin: 0;
      font: 12px Verdana,Arial,Tahoma;
      color: #eee;
      font-weight: normal;
      background: transparent;
      text-decoration: none;
      display: inline;
   }
   #include p {
      margin: 4px 0 0 10px;
      display: block;
   }
   #include b {
      font-weight: bold;
   }
   #include script {
      display:none;
   }
   
   /* Style the mini-form div */
   #include {
      border-top: 3px solid #ce6c1c;
      border-bottom: 3px solid #ce6c1c;
      background: #0b1933;
      position: absolute;
      top:0; left:0;
      width: 100%;
      height: 50px;
      z-index: 100000;
   }
   
   /* Mini-form elements */
   #include a {
      color: #ce6c1c;
   }
   #include a:hover {
      color: #ccc;
   }
   #include .url-input {
      padding: 2px;
      background: #eee;
      color: #111;
      border: 1px solid #ccc;
   }
   #include .url-input:focus {
      background: #fff;
      border: 1px solid #ce6c1c;
   }
   #include .url-button {
      font-weight: bold;
      border-style: outset;
      font-size: 11px;
      line-height: 10px;
   }
</style>
<script type="text/javascript">
   window.onload = function() {
     var results = document.cookie.match("hide=(.*?)(;|$)");
     console.log(results);
     if(results){
       if(results[1] == "true") {
        console.log("hiding");
        document.getElementById("include").style.display = 'none';
       }
     }
   }
   
   function hidebar() {
       document.cookie = "hide=true;";
       document.getElementById("include").style.display = 'none';
       console.log("hiding..");
       return false;
   }
</script>


<div id="include">
<?php
// Print form using variables (saves repeatedly opening/closing PHP tags)
// Edit as if normal HTML but escape any dollar signs
echo <<<OUT
<p id="disclamer">
You are visiting a <a href="https://www.torproject.org/docs/tor-hidden-service.html.en">Tor Hidden Service</a> Website trough <a href="http://www.tor2web.org">Tor2web</a> Proxy. 
Tor2web is not hosting this web content but just proxying internet users to tor network.  We suggest to access directly with a <a href="https://www.torproject.org/download/download.html.en">TorBrowserBundle</a> to increase your Anonimity. <br>
You can report abuse to TODO:InsertAbuseReportingForm. <a href="#" onclick="hidebar()">Click here to hide the disclaimer</a>
</p>
OUT;

?>

</div>

<!--[proxified]-->
