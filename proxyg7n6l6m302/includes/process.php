<?php
/*******************************************************************
* Glype Proxy Script
*
* Copyright (c) 2008, http://www.glype.com/
*
* Permission to use this script is granted free of charge
* subject to the terms displayed at http://www.glype.com/downloads
* and in the LICENSE.txt document of the glype package.
*******************************************************************
* This file is the processor that takes incoming data and processes
* it, surprisingly enough. Works with various aspects of the script.
******************************************************************/

/*****************************************************************
* Initialise
******************************************************************/

require 'init.php';


/*****************************************************************
* Switch - action depends on the action parameter
******************************************************************/

$action = isset($_GET['action']) ? $_GET['action'] : false;

switch ( $action ) {

   /*************************************************************
   * Update location - accept URL posted from index page or mini-form,
   * find options, convert to a 'proxified' URL and redirect there.
   **************************************************************/
   case 'update':

      // Valid input?
      if ( ! isset($_POST['u']) || ! ( $url = clean($_POST['u']) ) ) {
         break;
      }

      // Check for a http protocol (no other protocols are supported)
      if ( ! preg_match('#^https?://#i', $url) ) {
         $url = 'http://' . $url;
      }
      
      // Generate bitfield from new options
      $bitfield = 0;
      $i = 0;
      
      foreach ( $CONFIG['options'] as $name => $details ) {
         
         // Ignore forced
         if ( ! empty($details['force']) ) {
            continue;
         }
         
         // Current bit
         $bit = pow(2, $i);
         
         // Set bitfield
         if ( ! empty($_POST[$name]) ) {
            setBit($bitfield, $bit);
         }
         
         // Increase index
         ++$i;
         
      }
      
      // Save new bitfield in session
      $_SESSION['bitfield'] = $bitfield;
      
      // Save valid entry
      $_SESSION['no_hotlink'] = true;
      
      // Redirect to target
      redirect(proxifyURL($url, 'norefer'));

      break;


   /*************************************************************
   * Agree to our SSL warning.
   **************************************************************/
   case 'sslagree':
         
      // Flag our SSL warnedness
      $_SESSION['ssl_warned'] = true;
      
      // Return to previous page
      $redirectTo = isset($_SESSION['return']) ? $_SESSION['return'] : 'index.php';
   
      // Clear session return value
      unset($_SESSION['return']);
      
      // Redirect
      redirect($redirectTo);
   
      break;

      
   /*****************************************************************
   * Accept authorization credentials - accept data from _POST (session
   * may be closed before the server challenged us for authentication)/
   * Store the POSTed credentials in the session and redirect back to
   * requested page. The script will then use the provided credentials to
   * try again.
   ******************************************************************/
   case 'authenticate':
      
      // Ensure we have a page to return to and a site to apply the credentials to
      if ( empty($_POST['return']) || empty($_POST['site']) ) {
         break;
      }
      
      // Determine username/password
      $credentials = ( ! empty($_POST['user']) ? clean($_POST['user']) : '' ) 
                     . ':' .
                     ( ! empty($_POST['pass']) ? clean($_POST['pass']) : '' );
                     
      // Save in session
      $_SESSION['authenticate'][clean($_POST['site'])] = $credentials;
      
      // Redirect back to target page
      redirect(clean($_POST['return']));
   
      break;
      
   /*****************************************************************
   * Clear all proxified cookies
   ******************************************************************/
   case 'clear-cookies':
   
      // Where we do redirect back?
      $redirect = isset($_GET['return']) ? $_GET['return'] : 'index.php';
      
      // Server side cookies?
      if ( $CONFIG['cookies_on_server'] ) {
      
         // Look for cookie file and check writable
         if ( is_writable($file = $CONFIG['cookies_folder'] . session_id()) ) {
         
            // Delete it
            unlink($file);
         
         }
         
      } else {
      
         // Client side cookies so check cookies exist
         if ( empty($_COOKIE[COOKIE_PREFIX]) || ! is_array($_COOKIE[COOKIE_PREFIX]) ) {
            redirect($redirect);
         }
         
         // Recursive function to delete multi-dimensional cookie arrays
         function deleteAllCookies($array, $prefix='') {
            
            // Loop through each level
            foreach ( $array as $name => $value ) {
               
               $thisLevel = $prefix . '[' . $name . ']';
               
               if ( is_array($value) ) {
                  
                  // If another array, recurse
                  deleteAllCookies($value, $thisLevel);
                  
               } else {
               
                  // Do the deletion
                  setcookie($thisLevel, '', $_SERVER['REQUEST_TIME']-3600, '/', '');
                  
               }
            
            }
                  
         }
         
         deleteAllCookies($_COOKIE[COOKIE_PREFIX], COOKIE_PREFIX);
         
      }
      
      // And redirect
      redirect($redirect);
      
      break;
      
         
               cookies'] ) {
                  $name = COOKIE_PREFIX . '[' . urlencode(base64_encode($domain . ' ' . $path . ' ' . urlencode($name))) . ']';
               } else {
                  $name = COOKIE_PREFIX . '[' . $domain . '][' . $path . '][' . $name . ']';
               }
               
               // And unset
               setcookie($name, '', $expires, '/');
               
            }
         
         }
         
         // Redirect back to cookie page
         redirect('cookies.php');
      
         break;
         
         
      /*****************************************************************
      * Receive results of javascript capability testing
      ******************************************************************/
      case 'jstest':
      
         // Don't cache ajax
         sendNoCache();
      
         // Save in session
         $_SESSION['js_flags'] = array();
      
         // Valid parsing flags
         $valid = array('ajax', 'watch', 'setters');
      
         // Grab results from query string
         foreach ( $_GET as $name => $value ) {
            
            // If a valid item, save
            if ( in_array($name, $valid) ) {
               $_SESSION['js_flags'][$name] = true;
            }
            
         }
         
         // Done
         echo 'ok';
         exit;
      
         
}


/*****************************************************************
* Still here? Then action = unrecognised, or invalid input. Redirect
* to index page.
******************************************************************/

redirect();
