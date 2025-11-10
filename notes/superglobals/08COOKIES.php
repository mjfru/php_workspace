<!-- 
The $_COOKIE Superglobal

Cookies allow developers to store data on the user's client/browser, making it available through multiple pages, similar to sessions.

The $_COOKIE super global holds the values of cookies sent by the client's browser to the server.

These cookies are sent with HTTP requests, allowing the server to remember information about the user.

Where Sessions and Cookies Differ:
Storage Location - Cookies (Client)
Data Persistence - Cookies can be set to last for a certain time
Security - Cookies are less secure, sessions are more secure
Storage Capacity - Cookies are limited to small amounts of data
Ease of Use - Cookies are easier to use, scripting required for sessions
Cross-Tab Comms - Cookies accessible between tabs and windows, sessions lack communication
Use Cases - Cookies: Preferences, Auth. Tokens, Behavior, Session: Temp data


-->

<?php
setcookie('username', 'jdoe', time() + 3600, '/');

$username = $_COOKIE['username'] ?? 'Guest';


setCookie('username', '', time() - 3600, '/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies</title>
</head>

<body>
  <h1>Welcome <?= $username ?></h1>
</body>

</html>