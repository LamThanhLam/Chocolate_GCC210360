<?php
    setcookie("ussr",$row['username'],time()-3600);
    header("Location: index.php");
?>