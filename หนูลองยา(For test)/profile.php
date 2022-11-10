<?php
    include "db_connect.php";
    include "navbar.php";
    $sql="SELECT * FROM Customer WHERE CustomerID='".$_SESSION["ID"]."'";
    $result = $db->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        while($user = $result->fetchArray(SQLITE3_ASSOC)){
            echo "<p>".$user["FirstName"]."</p>";
            echo $user["LastName"];
            echo $user["Address"];
            echo $user["City"];
            echo $user["Province"];
            echo $user["Postcode"];
            echo $user["phonenumber"];
        }
    ?>    
</body>
</html>
