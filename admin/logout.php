<?php
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["role"]);

header("Location:index.php");
?>