<!-- 
PHP Super Globals

These are a group of globally accessible variables that include functions and classes.
They are associative arrays that store information about things such as: 
  the current request, 
  the server, sessions, 
  cookies, 
  and more.

They make PHP very practical but may also become a source of security vulnerabilities.

Nine such Superglobals are available:

$_GLOBALS - References variables in the global scope
$_SERVER - Contains info about the server, such as hostname, file paths, etc.
$_GET - Variables passed to the script via query params and GET forms
$_POST - Variables passed to the script via POST forms
$_FILES - Items uploaded to the current script
$_COOKIE - Variables passed to the script via HTTP cookies
$_SESSION - Session variables available to the script
$_REQUEST - Contains the contents of $_GET, $_POST, and $_COOKIE - Not recommended for use!
$_ENV - Variables passed to the current script via environment method
-->

<?php
// Common server variables:

?>