<?php
    include "db_connect.php";
    include "navbar.php";

    $sql = "SELECT * FROM Merchandise"; 
    $result = $db->query($sql);
    if(isset($_POST["sumbit"])){
        //Do nothing
    }    
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
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th></th>
            
        </tr>
        <?php
            while($product = $result->fetchArray(SQLITE3_ASSOC)){
                echo "<tr>
                <td>".$product["NameProduct"]."</td>
                <td>".number_format($product["Price"],2)."</td>
                <td><button>Bruh</button></td>
            </tr>";
            }
        ?>
        
    </table>
</body>
</html>