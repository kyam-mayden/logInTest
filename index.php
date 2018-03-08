<?php

if($_SESSION['loggedIn']===true){
    header('location: account.php');
}

?>

<h1> User Log In Exercise</h1>

<form method="POST" action="account.php">
    <label for="username">Username </label>
    <input type="text" name="username"><br>
    <label for="password">Password</label>
    <input type ="text" name="password">
    <input type="submit">
</form>

