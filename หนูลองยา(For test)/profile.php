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
    <form action="">

    
    <?php
        while($user = $result->fetchArray(SQLITE3_ASSOC)){
            echo "<input id='#' value='".$user["FirstName"]."' disabled>";
            echo "<input id='#' value='".$user["LastName"]."' disabled>";
            echo "<input id='#' value='".$user["Address"]."' disabled>";
            echo "<input id='#' value='".$user["City"]."' disabled>";
            echo "<input id='#' value='".$user["Province"]."' disabled>";
            echo "<input id='#' value='".$user["Postcode"]."' disabled>";
            echo "<input id='#' value='".$user["phonenumber"]."' disabled>";
        }
    ?>
        
</body>
</html>
