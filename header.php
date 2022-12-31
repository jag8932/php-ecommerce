<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jacob's MockCommerce</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div id='navbar'>
<nav>
    <a id='#logo' href='./index.php'>Home</a>
    <div class='spacer'></div>
    <?php 
    session_start();
    if (isset($_SESSION["firstname"])) { 
        $name = $_SESSION["firstname"];
        echo "<p id='welcome' style='white-space:nowrap;'>Welcome $name</p>"; 
    } else {
        echo "<div class='spacer'></div>";
    }
    ?>
    <div class='spacer'></div>
    <form id='search'>
        <input class='searchbar' type='text'>
        <button class='submitButton' type='submit'>Search</button>
    </form>
    <div class='spacer'></div>
    <div class='spacer'></div>
    <a href="./create-product.php">Create Product</a>
    <a href='./signup.php'>Signup</a>
    <a href='./login.php'>Login</a>
</nav>
</div>

