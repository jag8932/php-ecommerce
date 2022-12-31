
<?php 
include './header.php';
?>
<div id="signupContainer">
<form class="inputForm" id="signupform" action="./handler/signup.php" method="POST">
<h2>Signup</h2>
    <?php
    // Check to see if the user already filled out parts of the form 
        if(isset($_GET['first'])) {
            $first = $_GET['first'];
            echo "<input type='text' name='first' placeholder='Firstname' value=$first><br>";
        }
        else {
            echo '<input type="text" name="first" placeholder="Firstname"><br>';
        }
    // Check lastname
        if(isset($_GET['last'])) {
            $last = $_GET['last'];
            echo "<input type='text' name='last' placeholder='Lastname' value=$last><br>";
        }
        else {
            echo "<input type='text' name='last' placeholder='Lastname'><br>";
        }
    // Check email
        if(isset($_GET['email'])) {
            $email = $_GET['email'];
            echo "<input type='text' name='email' placeholder='Email' value=$email><br>";
        }
        else {
            echo "<input type='text' name='email' placeholder='Email'><br>";
        }
    // Check username
        if(isset($_GET['uid'])) {
            $uid = $_GET['uid'];
            echo "<input type='text' name='uid' placeholder='Username' value=$uid><br>";
        }
        else {
            echo "<input type='text' name='uid' placeholder='Username'><br>";
        }
    // Password won't be saved for security reasons
        echo "<input type='password' name='pwd' placeholder='password'> <br>";
    ?> 
    <button class="submit" type="submit" name="submit">Signup</button>
</form>
</div>
    <?php
    
    if (!isset($_GET['signup'])) {
        exit();
    }
    else {
        $signupCheck = $_GET['signup'];
        if ($signupCheck == 'empty') {
            echo "<p class='error'>You did not fill in all fields.</p>";
            exit();
        }
        else if ($signupCheck == 'invalidemail') {
            echo "<p class='error'>Email is invalid.</p>";
            exit();
        }
        else if ($signupCheck == 'success') {
            echo "<p class='success'>Signup successful!</p>";
            exit();
        }
        else if ($signupCheck == 'stmtfailed') {
            echo "<p class='error'>Something went wrong.</p>";
            exit();
        }
        else if ($signupCheck == 'usernametaken') {
            echo "<p class='error'>Username or email already taken.</p>";
        }
    }
    ?>
<?php 
include './footer.php';
?>