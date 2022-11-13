<?php
    include "db_connect.php";
    include "navbar.php";
    session_start();
    $sql = "SELECT * FROM Merchandise"; 
    $result = $db->query($sql);
    if(isset($_POST["submit"])){
        //Do nothing
        if(!isset($_SESSION["cart"])){
            $_SESSION["cart"] = array();
        }
        $sql2 = "SELECT * FROM Merchandise WHERE ID = ".$_POST["submit"]."";
        $result2 = $db->query($sql2);
        while($item = $result2->fetchArray(SQLITE3_ASSOC)){
            array_push($_SESSION["cart"],array("User" => "customer","ProductID" => $item["ID"] ,"Product" => $item["NameProduct"], "Price" => $item["Price"], "Amount" => 1));
        }
        
        
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
                <td>
                    <form target='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='post'>
                        <input type='submit' name='submit' value='".$product["ID"]."'>
                    </form>
                </td>
            </tr>";
            }
        ?>
        
    </table>
</body>
</html>