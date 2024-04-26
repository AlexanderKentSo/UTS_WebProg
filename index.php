<?php
if (isset($_COOKIE["array"])) {
    $themes = unserialize($_COOKIE["array"]);
}

$bg = "white";
$hd = "black";
$al = "left";
$pg = "black";
$sz = "12";

if (isset($_POST["chooseTheme"])) {
    $arrTheme = $themes[$_POST["theme"]];
    $bg = $arrTheme["background"];
    $hd = $arrTheme["heading"];
    $al = $arrTheme["alignment"];
    $pg = $arrTheme["paragraph"];
    $sz = $arrTheme["size"];
}

if (isset($_POST["editTheme"])) {
    $th = $_POST["theme"];
    header("location:edit.php?theme=$th");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            background-color: <?php if (isset($_COOKIE["array"]))echo $bg;?>;
        }

        h1 {
            color: <?php if (isset($_COOKIE["array"])) echo $hd; ?>;
            text-align: <?php if (isset($_COOKIE["array"])) echo $al; ?>;
        }

        p {
            color: <?php if (isset($_COOKIE["array"])) echo $pg; ?>;
            font-size: <?php if (isset($_COOKIE["array"])) echo $sz; ?>px;
        }
    </style>
</head>

<body>
    <p>
    <form method="post" action="index.php">
        <p style="font-size: 16px;">
        Theme : 
        <select name="theme" id="themeBox" required>
            <option value="">--Choose Theme--</option>
            <?php
            if (isset($_COOKIE["array"])){
            foreach (array_keys($themes) as $th3m3) {
                echo '<option value="' . $th3m3 . '">' . $th3m3 . '</option>';
            }
            }
            ?>
        </select>
        <a style="text-decoration: underline;" href="tambah.php">Add new Theme</a>
        </p>
        <input type="submit" name="chooseTheme" value="Choose the Theme">
        <input type="submit" name="editTheme" value="Edit the theme">
    </form>
    </p>
    <hr>
    <h1>Heading 1</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
    </p>
    <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
    </p>
    <p> 
    Nama Anggota Kelompok :<br>
    - Fransiscus Xaverius Petrus Jonathan Suhargo (160422070)<br>
    - Alexander Kent So (160422057)<br>
    - Aulia Novianty Lamanasa (160422142)
    </p>
</body>

</html>