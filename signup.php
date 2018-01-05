<?php

session_start();

if(!empty($_SESSION['userid']) and $_SESSION['userid'] == "admin" || $_SESSION['userid'] == "razerz") {
    $con = mysqli_connect('localhost', 'root', '', 'ServiceRapportProgram');
?>
    <fieldset>
        <legend>All Accounts</legend>
<?php
    if (!$con) {
        echo "Mysql error: " . mysqli_error($con);
    }
    else {
        $query = mysqli_query($con, "SELECT * FROM login");
        while($result = mysqli_fetch_assoc($query)) {
            ?>
                <table border="1" style="width: 50%; margin-bottom: 1%;">
                    <tr>
                        <th style="width: 35%;">Namn</th>
                        <th style="width: 30%;">Användarnamn</th>
                        <th style="width: 25%;">Lösenord</th>
                    </tr>
                    <tr>
                        <td><?php print_r($result['name']); ?></td>
                        <td><?php print_r($result['userid']); ?></td>
                        <td>*encrypted*</td>
                    </tr>
                </table>
            <?php
        }
    }
?> </fieldset>
    <fieldset>
        <legend>Delete Account</legend>
        <form action="" method="post">
            Användarnamn: <input type="text" name="deleteUserAcc">
            <input type="submit" value="Ta bort" name="delete">
        </form>
    <?php
    if(isset($_POST['delete'])) {
        if(!empty($_POST['deleteUserAcc']) and $_POST['deleteUserAcc'] !== 'razerz' and $_POST['deleteUserAcc'] !== 'admin') {
            $userAcc = $_POST['deleteUserAcc'];
                mysqli_query($con, "DELETE FROM login WHERE userid = '$userAcc'");
                header("Location: signup.php");
        }
        else {
            echo "You need to enter the username of the account which you want to delete.";
        }
    }
    ?>
    </fieldset>
    <fieldset>
        <legend>Create Account</legend>
        <form action="" method="post">
            <table border="1" style="width: 50%;">
                <tr>
                    <th>Namn</th>
                    <th>Användarnamn</th>
                    <th>Lösenord</th>
                </tr>
                <tr>
                    <td><input type="text" name="userName" style="width: 100%;"></td>
                    <td><input type="text" name="userID" style="width: 100%;"></td>
                    <td><input type="password" name="userPasswd" style="width: 100%;"></td>
                </tr>
            </table>
            <input type="submit" value="Skapa" name="createAcc" style="margin-top: 1%;">
        </form>
    </fieldset>
    <?php
    if(isset($_POST['createAcc'])) {
        if(!empty($_POST['userName']) and !empty($_POST['userID'])) {
            $userID = $_POST['userID'];
            $salt = openssl_random_pseudo_bytes(32);
            $passwd = $_POST['userPasswd'] + $salt;
            $hash = hash("sha256", $passwd);

            $numRow = mysqli_num_rows(mysqli_query($con, "SELECT * FROM login WHERE userid = '$userID'"));

            if(!$numRow) {
                $query = mysqli_prepare($con, "INSERT INTO login VALUES(?, ?, ?, ?)");
                mysqli_stmt_bind_param($query, "ssss", $userID, $salt, $hash, $_POST['userName']);
                mysqli_stmt_execute($query);
                header("Location: signup.php");
            }
            else {
                echo "User with the same username already exists!";
            }
        }
        else {
            echo "You need to fill in all values";
        }
    }
?>
    <fieldset>
        <legend>Modify Password</legend>
        <form action="" method="post">
            Användarnamn:<br><input type="text" name="changeUserPass"><hr>
            Nytt lösen:<br><input type="password" name="newUserPass">
            <input type="submit" value="Ändra" name="delete">
        </form>
        <?php
        if(isset($_POST['delete'])) {
            if(!empty($_POST['changeUserPass']) and !empty($_POST['newUserPass']) and $_POST['changeUserPass'] !== "admin" || $_POST['changeUserPass'] !== "razerz") {
                $userAcc = $_POST['changeUserPass'];
                $newUserPass = $_POST['newUserPass'];
                $salt = openssl_random_pseudo_bytes(32);
                $hash = hash("sha256", $newUserPass . $salt);

                $preparedquery = mysqli_prepare($con, "UPDATE login SET salt = ?, passwd = ? WHERE userid = ?");
                mysqli_stmt_bind_param($preparedquery, "sss", $salt, $hash, $userAcc);
                mysqli_stmt_execute($preparedquery);
                echo "Successful!";
            }
            else {
                echo "You need to enter the username and the new password of the account which you want to modify.";
            }
        }
        ?>
    </fieldset>
    <a href="login.php" style="margin-top: 1%;">Pages</a>
    <?php
?>
    <form action="" method="post">
        <input type="submit" name="logout" value="Logout" style="margin-top: 1%;">
    </form>
<?php
    if(isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("Location: login.php");
    }

}
else {
    echo "Error. Admin only page and admin not signed in. " . '<a href="login.php">Login</a>';
}

?>