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
* Our settings file. Self-explanatory - stores the config values.
*******************************************************************
* This file has been automatically generated by the glype admin tool.
* For a more complete and thorough explanation of options, consult
* the original settings.php file from the glype package.
******************************************************************/


/*****************************************************************
* Installation Options
******************************************************************/

// Theme/skin to use. This should be the name of the appropriate
// folder inside the /themes/ folder.
$CONFIG['theme'] = 'tor2web';

// Temporary directory used by the script. Many features require
// write permission to the temporary directory. Ensure this
// directory exists and is writable for best performance.
$CONFIG['tmp_dir'] = GLYPE_ROOT . '/tmp/';

// Use GZIP compression when sending pages back to the user. This
// reduces bandwidth usage but at the cost of increased CPU load.
$CONFIG['gzip_return'] = false;

// Warn users before browsing a secure site if on an unsecure
// connection. This option has no effect if your proxy is on https.
$CONFIG['ssl_warning'] = false;

// The fastest and most reliable method of ensuring javascript is
// properly proxified is to override the native javascript functions
// with our own. However, this may interfere with any other
// javascript added to the page, such as ad codes.
$CONFIG['override_javascript'] = true;

// This option fetches the server load and stops the script serving
// pages whenever the server load goes over the limit specified. Set
// to 0 to disable this feature.
$CONFIG['load_limit'] = 0;

// You can use this option to censor text content in downloaded
// pages and files. Any text listed here will be replaced with
// '####' in proxified content.
$CONFIG['censor_words'] = array();

// Anything specified here will be added to the bottom of all
// proxified pages just before the </body> tag.
$CONFIG['footer_include'] = '';

// If you have purchased a license to remove the copyright link,
// enter your license key here. Leave blank if you don't have a
// license.
$CONFIG['license_key'] = '';


/*****************************************************************
* URL Encoding Options
******************************************************************/

// Formats URLs as browse.php/aHR0... instead of
// browse.php?u=aHR0... Path info may not be available on all
// servers.
$CONFIG['path_info_urls'] = false;

// Generate unique URLs for each visitor. This increases privacy for
// the user but you cannot create links directly to proxified pages
// from outside the script if this option is enabled.
$CONFIG['unique_urls'] = false;


/*****************************************************************
* Hotlinking
******************************************************************/

// This option prevents users "hotlinking" directly to a proxified
// page and forces all users to first visit the index page.
$CONFIG['stop_hotlinking'] = false;

// If the above option is enabled, you can add individual referrers
// that are allowed to bypass the hotlinking protection.
$CONFIG['hotlink_domains'] = array();


/*****************************************************************
* Caching
******************************************************************/

// Enable / disable the cache feature. If disabled, skip the rest of
// this section.
$CONFIG['use_cache'] = true;

// Apply caching to requests for these file types.
$CONFIG['cache_file_types'] = array('css', 'jpg', 'jpeg', 'png', 'gif', 'js', 'flv', 'zip', 'rar');

// If you have limited disk space, you can apply caching to specific
// websites only (listed below).
$CONFIG['cache_all'] = true;

// Use the cache for these websites. This option has no effect if
// the above "Cache all" option is enabled.
$CONFIG['cache_sites'] = array();

// 
$CONFIG['cache_url'] = GLYPE_URL . '/tmp/cache/';

// 
$CONFIG['cache_path'] = $CONFIG['tmp_dir'] . 'cache/';


/*****************************************************************
* Logging
******************************************************************/

// Enable/disable the logging feature. If disabled, skip the rest of
// this section.
$CONFIG['enable_logging'] = true;

// Enter a destination for log files. A new log file will be created
// each day in the directory specified. The directory must be
// writable. To protect against unauthorised access, place the log
// folder above your webroot.
$CONFIG['logging_destination'] = $CONFIG['tmp_dir'] . 'logs/';

// You can avoid huge log files by only logging requests for .html
// pages, as per the default setting. If you want to log all
// requests (images, etc.) as well, enable this.
$CONFIG['log_all'] = true;


/*****************************************************************
* Website access control
******************************************************************/

// Block everything except these websites
$CONFIG['whitelist'] = array();

// Block these websites
$CONFIG['blacklist'] = array('vs5hb2ybldb4gfja', 'w7b5kmjonf4h6fea', 'cm6pxkmeyhf7kryb', '7o6dcmajcps4tbjb', '75aiiotc26qp4j2y', 'c7jh7jzl3taek4eh', 'iecwyzlr6ydaoc4z', '5cez64xymwnci47y', 'ylze62ejorjyfe7z', 'mldiefslh2tfrpu5', 'waivt2ksvjukhsps', 'jkpos24pl2r3urlw', 'opva2pilsncvtwmh', '46dspvfldjiqzsre', 'c7jh7jzl3teak4eh', '32zaudfm5y6w3ypy', 'kdq2y44aaas2aiu4', '4eiruntyxxbgfv7o', 'xqz3u5drneuzhaeo', '6x77gb7ngu6nymwl', 'kpvz7ki2v5agwt35', 'ci3hn2uzjw2wby3z', 'mf7ww4oo2ztz3xuv', 'nropmqpuz7ubtfea', 'j4ddjgxetfx2ybcx');


/*****************************************************************
* User access control
******************************************************************/

// 
$CONFIG['ip_bans'] = array();


/*****************************************************************
* Transfer options
******************************************************************/

// Time to wait for while establishing a connection to the target
// server. If the connection takes longer, the transfer will be
// aborted.
$CONFIG['connection_timeout'] = 60;

// Time to allow for the entire transfer. You will need a longer
// time limit to download larger files.
$CONFIG['transfer_timeout'] = 0;

// Preserve bandwidth by limiting the size of files that can be
// downloaded through your proxy.
$CONFIG['max_filesize'] = 0;

// Preserve bandwidth by limiting the speed at which files are
// downloaded through your proxy. Note: if limiting download speed,
// you may need to increase the transfer timeout to compensate.
$CONFIG['download_speed_limit'] = 0;

// This forwards any requested ranges from the client and this makes
// it possible to resume previous downloads. Depending on the "Queue
// transfers" option below, it may also allow users to download
// multiple segments of a file simultaneously.
$CONFIG['resume_transfers'] = false;

// You can limit use of your proxy to allow only one transfer at a
// time per user. Disable this for faster browsing.
$CONFIG['queue_transfers'] = true;


/*****************************************************************
* Cookies
******************************************************************/

// If enabled, cookies will be stored in the folder specified below.
$CONFIG['cookies_on_server'] = false;

// If storing cookies on the server, specify a folder to save the
// cookie data in. To protect against unauthorised access, place the
// cookie folder above your webroot.
$CONFIG['cookies_folder'] = $CONFIG['tmp_dir'] . 'cookies/';

// You can encode cookie names, domains and values with this option
// for optimum privacy but at the cost of increased server load and
// larger cookie sizes. This option has no effect if storing cookies
// on server.
$CONFIG['encode_cookies'] = false;


/*****************************************************************
* Maintenance
******************************************************************/

// How often to clear the temporary files created by the script?
$CONFIG['tmp_cleanup_interval'] = 0;

// When should old log files be deleted? This option has no effect
// if the above option is disabled.
$CONFIG['tmp_cleanup_logs'] = 0;


/*****************************************************************
* User Configurable Options
******************************************************************/

$CONFIG['options']['encodeURL'] = array(
   'title'   => 'Encode URL',
   'desc'    => 'Encodes the URL of the page you are viewing so that it does not contain the target site in plaintext.',
   'default' => false,
   'force'   => true
);

$CONFIG['options']['encodePage'] = array(
   'title'   => 'Encode Page',
   'desc'    => 'Helps avoid filters by encoding the page before sending it and decoding it with javascript once received. This is not 100% reliable and may break functionality in some browsers.',
   'default' => false,
   'force'   => true
);

$CONFIG['options']['showForm'] = array(
   'title'   => 'Show Form',
   'desc'    => 'This provides a mini form at the top of each page to allow you to quickly jump to another site without returning to our homepage.',
   'default' => true,
   'force'   => true
);

$CONFIG['options']['allowCookies'] = array(
   'title'   => 'Allow Cookies',
   'desc'    => 'Cookies may be required on interactive websites (especially where you need to log in) but advertisers also use cookies to track your browsing habits.',
   'default' => true,
   'force'   => true
);

$CONFIG['options']['tempCookies'] = array(
   'title'   => 'Force Temporary Cookies',
   'desc'    => 'This option overrides the expiry date for all cookies and sets it to at the end of the session only - all cookies will be deleted when you shut your browser. (Recommended)',
   'default' => false,
   'force'   => true
);

$CONFIG['options']['stripTitle'] = array(
   'title'   => 'Remove Page Titles',
   'desc'    => 'Removes titles from proxified pages.',
   'default' => false,
   'force'   => true
);

$CONFIG['options']['stripJS'] = array(
   'title'   => 'Remove Scripts',
   'desc'    => 'Remove scripts to protect your anonymity and speed up page loads. However, not all sites will provide an HTML-only alternative. (Recommended)',
   'default' => false,
   'force'   => true
);

$CONFIG['options']['stripObjects'] = array(
   'title'   => 'Remove Objects',
   'desc'    => 'You can increase page load times by removing unnecessary Flash, Java and other objects. If not removed, these may also compromise your anonymity.',
   'default' => false,
   'force'   => true
);


/*****************************************************************
* Do not edit this section manually!
******************************************************************/

// Settings file version for determining compatability with admin
// tool.
$CONFIG['version'] = '1.1';

//---PRESERVE ME---
// Anything below this line will be preserved when the admin control panel rewrites
// the settings. Useful for storing settings that don't/can't be changed from the control panel

$adminDetails['tor2web'] = 'e41431787f40a8d83005bb6361f515a3';