<?php
    session_start();
    include "db_connect.php";
    // print_r($_SESSION['cart']);
    // add order first
    $sql = "INSERT INTO Order (Order_ID, CustomerID, Order_Status, Ord_name, Ord_lname, Ord_address, Ord_city, Ord_province, Ord_post, Ord_phone, Ord_total)
    VALUES (NULL,'".$_SESSION["ID"]."', 'wait_payment', 'postname', 'postlname', 'postaddr', 'postcity', 'postprovince', 'postcode','postphone','total')";
    $result = $db->query($sql);
    if(!$result){
        echo "Bruh";
        echo $db->lastErrorMsg();
    }
    //เอาเลขorder หลังจากที่สร้างมา
    $sql2 = "SELECT Order_ID FROM Order ORDER BY Order_ID DESC LIMIT 1";
    $result2 = $db->query($sql2);
    if(!$result2){
        echo "Bruh2";
        echo $db->lastErrorMsg();
    }
    else{
        while($ord = $result2->fetchArray(SQLITE3_ASSOC)){
            $orderid = $ord;
        }
    }

    foreach($_SESSION['cart'] as $no => $item){
        if($item["User"] == $_SESSION["email"]){
            print_r($item);
            $sql = "INSERT INTO OrderDetail (ID, Order_ID, CustomerID, P_id, P_value, Order_qtn)
            VALUES (NULL, ".$orderid.", ".$_SESSION["ID"].", ".$item['ProductID'].", ".$item['Price'].",".$item['Amount'].")";
            //ลบตระกร้าทีละชิ้น
            unset($_SESSION['cart'][$no]);
            if(!isset($no)){
                echo "sus";
            }
        }
    header("location: cart.php");
        
        
        
        
        
        // echo($item["User"]);
        // if($item["User"] == $_SESSION["email"]){
            
        // }
    }
?>