<?php

session_start();


session_unset();


session_destroy();


header("Location: ../page/landing-page.php");
exit();
?>
