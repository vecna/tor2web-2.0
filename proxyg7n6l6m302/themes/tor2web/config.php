<?php
/*******************************************************************
* Glype Proxy Script
* 
* This theme configuration file allows easy customization of the
* theme without editing the HTML templates.
*******************************************************************
* Theme: Simple
* Author: Glype
* Website: http://www.glype.com/
******************************************************************/

/*****************************************************************
* Themes can use "theme replacements". These are HTML tags of the format
* <!--[tag_name]--> in the template files. To automatically replace
* these placeholders with other text, use the $themeReplace array.
*  e.g.
* <!--[tag_name]--> will be replaced with the value of $themeReplace['tag_name']
******************************************************************/

// Website name
$themeReplace['site_name'] = ' Tor2web';

// Meta description
$themeReplace['meta_description'] = <<<OUT

OUT;

// Meta keywords (separate with comma)
$themeReplace['meta_keywords'] = <<<OUT

OUT;

// Proxy description text
$themeReplace['description'] = <<<OUT
<p>Sorry, we couldn't find the page you requested. This could be because:</p>

<ol>
  <li><p><strong>You entered an invalid URL.</strong> This is most likely if you get this page immediately after trying to visit a URL. This service only works with valid <code>.onion</code> URLs. Please check your URL and try again.</p></li>
  <li><p><strong>The server you're trying to connect to is down.</strong> This is most likely if you get this page after a long wait. Please try again later.</p></li>
  <li><p><strong>The Tor network is overloaded.</strong> This is most likely if you have other reasons to believe the URL is valid and the server is up. Please try again later.</p></li>
  <li><p><strong>There's a problem with tor2web.</strong> This is most likely if you get this error on every uncached request. Please let us know.</p></li>
  <li><p><strong>It has been blocked by tor2web.</strong> It may happen that tor2web maintainer have to block proxy acces certain explicit illegal content in order to keep the network up and running. In such case you can still access the content directly by using Tor, that's because Tor2web just act as a proxy server and the content is on a <a href="https://www.torproject.org/docs/tor-hidden-service.html.en">Tor Hidden Service</a>. </p></li>
</ol>
OUT;

// Ad location above the form on the index page
$themeReplace['index_above_form'] = <<<OUT

OUT;

// Ad location below the form on the index page
$themeReplace['index_below_form'] = <<<OUT

OUT;

// Ad location on proxified pages below the url mini-form
$themeReplace['proxified'] = <<<OUT

OUT;
