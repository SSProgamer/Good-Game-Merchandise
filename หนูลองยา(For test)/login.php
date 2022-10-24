<?php
    include 'db_connect.php';
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM Customer 
        WHERE Username='".$username ."'
        AND Password='".$password."' ";
        $result = $db->query($sql);
        if(!$result){
            // $errmsg = $db->lastErrorMsg();
            echo "<script>";
            // echo "alert(\"".$errmsg."\");";
            echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
            echo "window.history.back()";
            echo "</script>";
        }
        else{
            session_start();
            while($row = $result->fetchArray(SQLITE3_ASSOC)){
                $_SESSION["ID"] = $row["CustomerID"];
                $_SESSION["username"] = $row["Username"];
                echo $row["Username"];
            }
            header("Location: session.php");
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="username">
            <input type="text" name="password">
            <button type="submit" name="submit">Log in</button>
        </form>
    </div>
    <?php include "coach.php"; ?>
</html>