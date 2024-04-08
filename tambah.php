<?php
$themes = array();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>

<body>
    <form action="add.php" method="post">
        <p><label for="theme">Name of your theme: </label><input type="text" name="theme" id="theme"></p>
        <p><label for="background">Color of Page Background: </label><input type="color" name="background" id="background"></p>
        <p><label for="heading">Color of Heading: </label><input type="color" name="heading" id="heading"></p>
        <p><label for="alignment">Alignment of Heading: </label>
            <select name="alignment" id="alignment">
                <option value="center">Center</option>
                <option value="left">Left</option>
                <option value="Right">Right</option>
            </select>
        </p>
        <p><label for="paragraph">Color of Paragraph: </label><input type="color" name="paragraph" id="paragraph"></p>
        <p><label for="size">Font Size of your Paragraph: </label><input type="number" name="size" id="size" min="0">
        <p>
            <button type="submit" name="btnSimpan" value="ok">SAVE</button>
        </p>
    </form>
</body>

</html>