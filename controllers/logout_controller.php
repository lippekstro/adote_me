<?php
session_start();
session_unset();
session_destroy();

header('Location: /adote_me/views/login.php');
exit();