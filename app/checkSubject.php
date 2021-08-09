<?php
session_start();

if (!isset($_SESSION["name"])) {
    $_SESSION["name"] = $_POST["fullName"];
}

if (!isset($_SESSION["attemptNum"])) {
    $_SESSION["attemptNum"] = 1;
} else {
    $_SESSION["attemptNum"] += 1;
}

function checkSubject()
{
    if ($_POST['subject'] == 'mathematics') {
        header("Location: mathSection.php");
    } elseif ($_POST['subject'] == 'literature') {
        header("Location: engSection.php");
    }
}
checkSubject();
