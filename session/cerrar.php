<?php
session_name("LOGIN");
session_start();
session_destroy();

echo "<script>location.href='index.php';</script>";
