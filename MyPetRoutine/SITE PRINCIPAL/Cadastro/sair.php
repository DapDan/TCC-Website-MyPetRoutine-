<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: log_cad.php");
?> 