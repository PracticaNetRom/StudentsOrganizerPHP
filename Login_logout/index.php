<?php
    session_start();
?>
<html>
<body>

<table>
    <tr>
        <td>Usename</td>
        <td>Password</td>
    </tr>
    <tr>
        <td>
            <?php
                print($_SESSION["username"]);
            ?>
        </td>
        <td>
            <?php
                print($_SESSION["password"]);
            ?>
        </td>
    </tr>
    <form action="logout.php" method="POST">
        <input type="submit" name="submit" value="Logout">
    </form>
</table>
</body>
</html>