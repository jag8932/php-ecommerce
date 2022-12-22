<?php
    include_once 'header.php'
?>

<div id='login-container'>
    <h2>Login</h2>
    <form class='inputForm' id='loginForm' method="post" action='./handler/login.php'>
        <input type='text' name='uid' placeholder='Username or Email'><br>
        <input type='password' name='pwd' placeholder='Password'><br>
        <input type='password' name='pwdRepeat' placeholder='Repeat Password'><br>
        <button type='submit' name='submit' class='submit'>Login</button>
    </form>
    <?php
        if (!isset($_GET['login'])) {
            exit();
        } else {
            $loginCheck = $_GET["login"];
            if ($loginCheck == 'nopwdmatch') {
                echo "<p class='error'>Passwords don't match.</p>";
            }
            else if ($loginCheck == 'noaccount') {
                echo "<p class='error'>No account was found with that username or email.</p>";
            }
            else if ($loginCheck == 'fieldempty') {
                echo "<p class='error'>You did not fill in all fields.</p>";
            }
            else if ($loginCheck == 'incorrectpassword') {
                echo "<p class='error'>Incorrect Password.</p>";
            }
        }
    ?>
</div>

<?php 
include './footer.php';
?>