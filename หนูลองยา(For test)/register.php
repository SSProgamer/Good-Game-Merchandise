<?php
    include 'db_connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $upcase = preg_match('@[A-Z]@', $password);
        $lowcase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        //check condition before create new user
        //used by php (optional)
        if(strlen($username) < 8){
            //if username < 8
            echo "<script>";
            echo "alert(\"nlength < 8\")";
            echo "</script>";
        }
        else if(strlen($password) < 8){
            //if password < 8
            echo "<script>";
            echo "alert(\"plength < 9\")";
            echo "</script>";
        }
        else if(!$upcase || !$lowcase || !$number){
            echo "<script>";
            echo "window.alert(\" Password should atleast 1 lower&highercase character and number\");"; 
            echo "</script>";
        }
        // else if(){

        // }
        // else if($password){

        // }
        else if($password != $_POST['c_pass']){
            //if confirm != password
            echo "<script>";
            echo "alert(\"password not match\")";
            echo "</script>";

        }
        else{
            echo $username, $password;
            $sql = "INSERT INTO Customer (CustomerID, Username, Password)
            VALUES (NULL,'".$username."', '".$password."')";
            $result = $db->query($sql);
            if(!$result){
                echo $db->lastErrorMsg();
            }
            else{
                header("Location: Login.php");
            }
        }
        
        


        // $sql = "SELECT * FROM Customer 
        // WHERE Username='".$username ."'
        // AND Password='".$password."' ";
        // $result = $db->query($sql);
        // if(!$result){
        //     // $errmsg = $db->lastErrorMsg();
            // echo "<script>";
            // // echo "alert(\"".$errmsg."\");";
            // echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
            // echo "window.history.back()";
            // echo "</script>";
        // }
        // else{
        //     session_start();
        //     while($row = $result->fetchArray(SQLITE3_ASSOC)){
        //         $_SESSION["ID"] = $row["CustomerID"];
        //         $_SESSION["username"] = $row["Username"];
        //         echo $row["Username"];
        //     }
        //     header("Location: session.php");
        // }
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
    <div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label for="">Username:</label>
                <input type="text" name="username">
            </div>
            <div>
                <label for="">Password:</label>
                <input type="text" name="password">
            </div>
            <div>
                <label for="">Confirm password:</label>
                <input type="text" name="c_pass">
            </div>
            <button type="submit" name="submit">sign up</button>
        </form>
        <button><a href="login.php">Already have account?</a></button>
    </div>
    
</body>
</html>
