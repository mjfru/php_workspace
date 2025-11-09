<!-- 
The $_SESSION superglobal

Sessions allow devs to store and manage user-specific data on the server that persists through HTTP requests.
(Logins, etc.)

$_SESSION is used to store session data.

In order to use sessions, the function session_start() must be called.

How sessions work:
  1. Session Initialization: Session ID is created and stored in a cookie.
  2. Data Storage: Data such as the user ID can be stored in a session.
  3. Data Retrieval: The server can retrieve session data associated with the user.
  4. Session Termination: Sessions can expire or be terminated explicity.

-->

<?php

session_start();
$_SESSION['name'] = 'Matt';

// print_r($_SESSION);

if (isset($_SESSION['name'])) {
  echo 'Name: ' . $_SESSION['name'] . ' is logged in. <br>';
}

unset($_SESSION['name']);
session_destroy();

if (isset($_SESSION['name'])) {
  echo 'Name: ' . $_SESSION['name'] . 'is logged in.';
} else {
  echo "Nothing in session.";
}
?>