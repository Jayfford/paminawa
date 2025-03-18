<?php
include 'views/header.php';

?>

<form id="loginform" action="" method="POST">
    <label for="uname">Username or Email</label>
    <input type="text" name="uname" id="uname" placeholder="Username or Email" required>
    
    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass" placeholder="Password" required>
    
    <input type="submit" value="Login">
</form>  

<?php
include 'views/footer.php';
?>