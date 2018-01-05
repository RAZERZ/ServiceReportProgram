<?php
error_reporting(E_ALL & ~E_NOTICE);

session_start();
if(empty($_SESSION['userid'])) {
    ?>
    <html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <fieldset>
        <legend>Login</legend>
        <form action="" method="post">
            Userid <input type="text" name="userid">
            Passwd <input type="password" name="passwd">
            <input type="submit" name="login" value="Login">
        </form>
    </fieldset>
    </body>
    </html>

    <?php

    $con = mysqli_connect('localhost', 'root', '', 'ServiceRapportProgram');

    if (!$con) {
        echo "Couldn't connect to mysql " . mysqli_error($con);
    } else {

        if (isset($_POST['login'])) {

            if (!empty($_POST['userid']) and !empty($_POST['passwd'])) {
                $userid = $_POST['userid'];
                $passwd = $_POST['passwd'];

                if ($query = mysqli_prepare($con, "SELECT * FROM login WHERE userid = ?")) {
                    mysqli_stmt_bind_param($query, "s", $userid);
                    mysqli_stmt_execute($query);
                    mysqli_stmt_bind_result($query, $userids, $salts, $passwds, $names);
                    mysqli_stmt_fetch($query);

                    $hashed = hash("sha256", $passwd . $salts);

                    if(!empty($userids) and $hashed == $passwds) {
                        $_SESSION['userid'] = $userid;
                        header("Location: login.php");
                    } else {
                        echo "Wrong username or passwd";
                    }

                }

            } else {
                echo "Error. You need to enter both username and password";
            }

        }
    }
}
else {
    echo "<h1 style='text-align: center;'>Already signed in!</h1>";
?>
    <fieldset>
        <legend>Continue to...</legend>
        <ul>
            <li><a href="index.php">Startsidan</a></li>
            <li><a href="tables.php">Alla I databasen</a></li>
            <li><a href="signup.php">Konton</a></li>
        </ul>
        <br>
        <form method="post" action="">
            <input type="submit" value="Logout" name="signout">
        </form>
    </fieldset>
    <?php
    if(isset($_POST['signout'])) {
        session_unset();
        session_destroy();
        header("Location: login.php");
    }
}
?>