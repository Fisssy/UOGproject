<?php
setcookie('username', null, time() - 3600, '/');
header("location:index.html");
?>