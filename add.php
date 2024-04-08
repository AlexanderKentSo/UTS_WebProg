<?php
if (isset($_POST["ok"])) {
    $theme = $_POST["theme"];
    $background = $_POST["background"];
    $heading = $_POST["heading"];
    $alignment = $_POST["aligment"];
    $paragraph = $_POST["paragraph"];
    $size = $_POST["size"];
    setcookie("theme", $theme, time() + 600);
    setcookie("background", $background, time() + 600);
    setcookie("heading", $heading, time() + 600);
    setcookie("aligment", $alignment, time() + 600);
    setcookie("paragraph", $paragraph, time() + 600);
    setcookie("size", $size, time() + 600);
} else {
    header("location: tambah.php");
}
