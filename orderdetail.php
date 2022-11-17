<?php
    include "navbar.php";
    $sql2 = "SELECT * FROM 'OrderDetail' WHERE Order_ID =". $_GET['id']."";
    $result2 =$db->query($sql2);
    if (!$result2) {
        echo "bruh";
        echo $db->lastErrorMsg();
        // header("location: login.php");
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
    <?php
        $sql = "SELECT * FROM 'Order' WHERE Order_ID = ". $_GET['id']."";
        $result = $db->query($sql);
        if (!$result) {
            // echo "bruh 2";
            echo $db->lastErrorMsg();
            
        }
        else{
            while($ord = $result->fetchArray(SQLITE3_ASSOC)){
                echo $ord['Order_ID']." ";
                echo $ord['Ord_name']." ";
                echo $ord['Ord_lname']." ";
                echo $ord['Ord_address']." ";
                echo $ord['Ord_city']." ";
                echo $ord['Ord_province']." ";
                echo $ord['Ord_post']." ";
                echo $ord['Ord_phone']." ";
                echo $ord['Ord_date']."<br>";
            }
        }

        while($item = $result2->fetchArray(SQLITE3_ASSOC)){
            //get productid from orderdetail and fetch on merchandise table
            $sql3 = "SELECT * FROM 'Merchandise' WHERE ID = ".$item['P_id']."";
            $result3 = $db->query($sql3);
            if (!$result3) {
                // echo "bruh 2";
                echo $db->lastErrorMsg();
                
            }
            else{
                while($product = $result3->fetchArray(SQLITE3_ASSOC)){
                    //อาจมีการดึงรูปด้วยนะ
                    echo $product['NameProduct']."  ";
                    echo $product['Price']."  ";
                    echo $item['Order_qtn']."<br>";
                    // echo $product['NameProduct']+"<br>";
                }
            }
            

            
            
        }
    ?>
</body>
</html>