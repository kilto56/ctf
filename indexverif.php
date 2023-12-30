<?php

    $user = 'adminPHP';
    $pswd = 'PHPIsTheBestLanguage';

    if (isset($_POST['user']) && isset($_POST['pswd'])) {
        $userPswd = $_POST['pswd'];
        $userUser = $_POST['user'];

        if ($userPswd === $pswd && $userUser === $user) {
            echo 'You found the flag : GhU7&5%pwAl;+8hB';
            echo 'You can use it to finish the challenge :)';
        } else {
            echo 'Incorrect password or username !';
        };
    };

    if (isset($_GET['pswd'])) {
        echo $pswd;
    };

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Connection</title>
    </head>
    <body>
        <form action="indexverif.php" method="post">
            <input type="text" name="user"/>
            <br>
            <input type="password" name="pswd"/>
            <br>
            <input type="submit" value="Se connecter">
        </form>
    </body>
</html>