<?php

$username="test";

$password="test";

$enteredUser=$_POST['username'];

$enteredPword=$_POST['password'];

$loggedIn=false;

if($_SESSION['loggedIn']===true) {
    echo "You are logged in";
} else {
    if ($enteredUser === $username && $enteredPword === $password) {
        $loggedIn = true;
    } else {
        $loggedIn = false;
        header('Location: index.php');
    }
}

session_start();

echo "You are logged in!";

$_SESSION['loggedIn'] = $loggedIn;


?>

<form method="POST" action="logOut.php">
    <input type="submit" value="Log out">
</form>




