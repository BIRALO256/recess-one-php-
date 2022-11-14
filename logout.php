<?php

session_start();
session_unset();
session_destroy();
header("location:../recesspart2/index.php");

?>