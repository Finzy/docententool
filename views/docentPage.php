<?php
session_start();


//array met inlog gegevens
$userinfo = array(
                'docent'=>'123',
                'user2'=>'password2'
                );


//maakt username leeg logt dus uit.
if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

//als username en password gelijk zijn word de form geinclude
if(isset($_POST['submit'])) {
    if(isset($_POST['username']) && isset($_POST['password'])) {

        if(isset ($userinfo[$_POST['username']]) && $userinfo[$_POST['username']] == $_POST['password'])
            header("Location:../views/toets.php");
        else {
            echo "failed to login";
        }
    }

}
?>
    <body>
    	
        <form name="login" action="" method="post">
            Username:  <input type="text" name="username"/><br />
            Password:  <input type="password" name="password"/><br />
            <input type="submit" name="submit" value="Submit" />
        </form>
    </body>