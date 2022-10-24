<?php


//ทดสอบการเก็บ $_SESSION

session_start(); //เปิดใช้ตัวแปรSession
//$_SESSION["name"] = md5("Joe Mama"); //ตั้งตัวแปรSession
if (!$_SESSION) {
    //ถ้าตัวแปรSession ไม่มีการเก็บอะไรทำตามคำสั่งนีั้
    echo "not login yet";
    header("location: login.php");
} else {
    echo $_SESSION["username"];
}

//ถ้ากดปุ่มLogout
if (isset($_POST['logout'])) {
    session_destroy(); //ทำลายตัวแปรSession
    
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "navbar.php";?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <button type="submit" name="logout">logout</button>
    </form>

</body>

</html>