<?php

// making the cookie expire if we logout
$seconds = -5 + time();

// killing the cookie if the button is pushed
setcookie(loggedin, date("F jS - g:i a"), $seconds);
// to select witch page you want to load
header("location:?action=login");

?>