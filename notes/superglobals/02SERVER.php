<?php
// Common server variables:
// Contains GET, POST, PATCH, etc.
$requestMethod = $_SERVER['REQUEST_METHOD']  ?? "";

// Stores the name and version of the name of the request (HTTP 1.1, etc.)
$serverProtocol = $_SERVER['SERVER_PROTOCOL']  ?? "";

// Provides the name of the server host
$serverName = $_SERVER['SERVER_NAME']  ?? "";

// Provides the port number of your server
$serverPort = $_SERVER['SERVER_PORT']  ?? "";

// Development Server
$serverSoftware = $_SERVER['SERVER_SOFTWARE']  ?? "";

// Store emails address of administrator, web master, etc.
$serverAdmin = $_SERVER['SERVER_ADMIN']  ?? "";

// A common one, this will provide the document root of your project
$documentRoot = $_SERVER['DOCUMENT_ROOT']  ?? "";

// Provides the file name of your script
$scriptFilename = $_SERVER['SCRIPT_FILENAME']  ?? "";

// Just the script name, not the path
$scriptName = $_SERVER['SCRIPT_NAME']  ?? "";

// Just the PHP script name, likely the same result as above
$phpSelf = $_SERVER['PHP_SELF']  ?? "";

// Gives your address, local if in development
$remoteAddr = $_SERVER['REMOTE_ADDR']  ?? "";

// Indicates the type of connection being used
$connection = $_SERVER['HTTP_CONNECTION']  ?? "";

// The host and the port the server is running on
$host = $_SERVER['HTTP_HOST']  ?? "";

// Stores the URL of the referring page (if you came from a link)
$referer = $_SERVER['HTTP_REFERER']  ?? "";

// Holds the user agent's string, identifying browsers and OS
$userAgent = $_SERVER['HTTP_USER_AGENT']  ?? "";

// Gives the query string, if available
$queryString = $_SERVER['QUERY_STRING']  ?? "";

// Represents the full URL of the current request, including the query string
$requestUri = $_SERVER['REQUEST_URI']  ?? "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-8 bg-white shadow-md mt-10 rounded-lg">
    <h1 class="text-3xl font-semibold mb-4 text-center">Server Information</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Request Method:</strong>
        <?= $requestMethod ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Protocol:</strong>
        <?= $serverProtocol ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Name:</strong>
        <?= $serverName ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Port:</strong>
        <?= $serverPort ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Software:</strong>
        <?= $serverSoftware ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Admin:</strong>
        <?= $serverAdmin ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Document Root:</strong>
        <?= $documentRoot ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Script Filename:</strong>
        <?= $scriptFilename ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Script Name:</strong>
        <?= $scriptName ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">PHP Self:</strong>
        <?= $phpSelf ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Remote Addr:</strong>
        <?= $remoteAddr ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Connection:</strong>
        <?= $connection ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Host:</strong>
        <?= $host ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Referer:</strong>
        <?= $referer ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">User Agent:</strong>
        <?= $userAgent ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Query String:</strong>
        <?= $queryString ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Request Uri:</strong>
        <?= $requestUri ?>
      </div>
    </div>
</body>

</html>