<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>t4c</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <h1>Hello</h1>
    <nav class="main_navi">

<?php

if ($_GET['page'] == 1) {
    echo "
    <a class='active' href='index.php?page=1'>Home</a>
    <a class='' href='index.php?page=2'>About me</a>
    <a class='' href='index.php?page=3'>Shop</a>
    ";
    require_once 'page1.php';
}
?>
</nav>



</body>
</html>