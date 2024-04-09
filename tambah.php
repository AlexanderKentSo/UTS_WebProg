<?php
if (isset($_COOKIE["array"])) {
    $themes = unserialize($_COOKIE["array"]);
}

if (isset($_POST["insert"])) {
    $theme = $_POST["theme"];
    $background = $_POST["background"];
    $heading = $_POST["heading"];
    $alignment = $_POST["alignment"];
    $paragraph = $_POST["paragraph"];
    $size = $_POST["size"];
    $arr = array("background" => $background, "heading" => $heading, "alignment" => $alignment, "paragraph" => $paragraph, "size" => $size);
    $themes[$theme] = $arr;
    setcookie("array", serialize($themes), time() + 600);
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>

<body>
    <form action="tambah.php" method="post">
        <p><label for="theme">Name of your theme: </label><input type="text" name="theme" id="theme" required></p>
        <p><label for="background">Color of Page Background: </label><input type="color" name="background" id="background" required></p>
        <p><label for="heading">Color of Heading: </label><input type="color" name="heading" id="heading" required></p>
        <p><label for="alignment">Alignment of Heading: </label>
            <select name="alignment" id="alignment" required>
                <option value="">--select alignment--</option>
                <option value="center">Center</option>
                <option value="left">Left</option>
                <option value="Right">Right</option>
            </select>
        </p>
        <p><label for="paragraph">Color of Paragraph: </label><input type="color" name="paragraph" id="paragraph" required></p>
        <p><label for="size">Font Size of your Paragraph: </label><input type="number" name="size" id="size" min="0" required>
        <p>
            <button type="submit" name="insert" value="ok">SAVE</button>
        </p>
    </form>
</body>

</html>