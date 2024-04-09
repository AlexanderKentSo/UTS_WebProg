<?php
$themes = array();
if (isset($_COOKIE["array"])) {
    $themes = unserialize($_COOKIE["array"]);
}

if (isset($_GET["theme"])) {
    $index = $_GET["theme"];
    $arrTheme = $themes[$index];
    $bg = $arrTheme["background"];
    $hd = $arrTheme["heading"];
    $al = $arrTheme["alignment"];
    $pg = $arrTheme["paragraph"];
    $sz = $arrTheme["size"];
} else {
    $index = "";
    $bg = "#fff";
    $hd = "#000";
    $al = "left";
    $pg = "#000";
    $sz = "12";
}

if (isset($_POST["edit"])) {
    $theme = $_POST["theme"];
    $background = $_POST["background"];
    $heading = $_POST["heading"];
    $alignment = $_POST["alignment"];
    $paragraph = $_POST["paragraph"];
    $size = $_POST["size"];
    $arr = array("background" => $background, "heading" => $heading, "alignment" => $alignment, "paragraph" => $paragraph, "size" => $size);
    if ($theme != $index) {
        $themes[$theme] = $arr;
        unset($themes[$index]);
    } else {
        $themes[$index] = $arr;
    }
    setcookie("array", serialize($themes), time() + 600);
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <form action="edit.php?theme=<?php echo $index; ?>" method="post">
        <p><label for="theme">Name of your theme: </label><input type="text" name="theme" id="theme" value="<?php echo $index; ?>"></p>
        <p><label for="background">Color of Page Background: </label><input type="color" name="background" id="background" value="<?php echo $bg; ?>"></p>
        <p><label for="heading">Color of Heading: </label><input type="color" name="heading" id="heading" value="<?php echo $hd; ?>"></p>
        <p><label for="alignment">Alignment of Heading: </label>
            <select name="alignment" id="alignment">
                <option value="center">Center</option>
                <option value="left">Left</option>
                <option value="Right">Right</option>
            </select>
        </p>
        <p><label for="paragraph">Color of Paragraph: </label><input type="color" name="paragraph" id="paragraph" value="<?php echo $pg; ?>"></p>
        <p><label for="size">Font Size of your Paragraph: </label><input type="number" name="size" id="size" min="0" value="<?php echo $sz; ?>">
        <p>
            <button type="submit" name="edit" value="ok">SAVE</button>
        </p>
    </form>
</body>

</html>