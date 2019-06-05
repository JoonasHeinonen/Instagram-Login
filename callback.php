<?php
    if (isset($_GET['error'])) {
        header("string: Location: login.php");
        exit();
    }

    require "InstagramAPI.php";

    $data = $Instagram->getAccessTokenAndUserDetails();
?>