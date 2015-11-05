<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);

define('TARTARUS_INSTALL_PATH', __DIR__ . '/..');
define('TARTARUS_THEME_PATH', TARTARUS_INSTALL_PATH . '/theme/render.php');

include(TARTARUS_INSTALL_PATH . '/src/bootstrap.php');

$sessionName = "2dlO7jP6HUEV9quUulBXtkMHBAtjcdqsK4bjodu15"; // Set a custom session name
$secure = false; //use SSL or not
// This stops JavaScript being able to access the session id.
$httponly = true;
// Forces sessions to only use cookies.
ini_set('session.use_only_cookies', 1);
$lifetime = 3600;
ini_set('session.gc_maxlifetime', $lifetime); // set the session max lifetime
if (ini_set('session.use_only_cookies', 1) === false) {
    die("Could not start secure session");
}
// Gets current cookies params.
$cookieParams = session_get_cookie_params();
session_set_cookie_params(
    $cookieParams["lifetime"],
    $cookieParams["path"], 
    $cookieParams["domain"], 
    $secure,
    $httponly
);
// Sets the session name to the one set above.
session_name($sessionName);
session_start(); // Start the PHP session 
session_regenerate_id(); // regenerated the session, delete the old one. 

$tartarus = new StdClass;

$tartarus->lang = 'sv';
$tartarus->titleAppend = ' | Tartarus, en webbtemplate';

// This is the <head> tag used at the top of each page, not to be confused with "siteHeader" and "pageHeader"
// This contains all of the google-fonts used aswell as the viewport setting
$tartarus->websiteHeadTag = "
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=2.0\">
<link href='https://fonts.googleapis.com/css?family=Expletus+Sans:500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Hind+Vadodara:600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
";

$tartarus->stylesheets = array();
$tartarus->stylesheets[] = "css/style.css";

$tartarus->favicon = "img/favicon.png";
$tartarus->modernizr = "js/modernizr-custom.js";
$tartarus->jquery = "js/jquery.js";

$tartarus->js_include = array();
