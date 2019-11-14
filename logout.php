<?php


session_destroy();

unset($_SESSION['user_id']);

header('location: index.html');

?>