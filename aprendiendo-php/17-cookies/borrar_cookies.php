<?php

if (isset($_COOKIE['micookie'])){
    unset($_COOKIE);
    setcookie('micookie','',time()-100);
}

header('Location: ver_cookies.php');