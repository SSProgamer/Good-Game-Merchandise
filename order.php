<?php
    session_start();
    date_default_timezone_set('Asia/Bangkok');
    include "db_connect.php";
    $total = $_POST['order'];
    $name = $_POST['fname'];
    $lname = $_POST['lname'];
    $addr = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postcode = $_POST['postcode'];
    $phone = $_POST['phone'];
    $timestamp = date("D d-M-Y G:i:s");


    // print_r($_SESSION['cart']);
    // add order first
    $sql = "INSERT INTO 'Order' (Order_ID, CustomerID, Order_Status, Ord_name, Ord_lname, Ord_address, Ord_city, Ord_province, Ord_post, Ord_phone, Ord_total, Ord_date)
    VALUES (NULL,'".$_SESSION["ID"]."', 'wait_payment', '$name', '$lname', '$addr', '$city', '$province', '$postcode','$phone','$total','$timestamp')";
    $result = $db->query($sql);
    if(!$result){
        echo "Bruh";
        echo $db->lastErrorMsg();
    }
    else{
        //เอาเลขorder หลังจากที่สร้างมา
        $sql2 = "SELECT Order_ID FROM 'Order' ORDER BY Order_ID DESC LIMIT 1";
        $result2 = $db->query($sql2);
        if(!$result2){
            echo "Bruh2";
            echo $db->lastErrorMsg();
        }
        else{
            while($ord = $result2->fetchArray(SQLITE3_ASSOC)){
                $orderid = $ord['Order_ID'];
            }
            foreach($_SESSION['cart'] as $no => $item){
                if($item["User"] == $_SESSION["email"]){
                    // print_r($item);
                    $sql3 = "INSERT INTO OrderDetail (ID, Order_ID, CustomerID, P_id, P_value, Order_qtn)
                    VALUES (NULL, $orderid, ".$_SESSION["ID"].", ".$item['ProductID'].", ".$item['Price'].",".$item['Amount'].")";
                    //ลบตระกร้าทีละชิ้น
                    $result3 = $db->query($sql3);
                    if(!$result3){
                        echo "Bruh3";
                        echo $db->lastErrorMsg();
                    }
                    else{
                        unset($_SESSION['cart'][$no]);
                    }
                    
                        // if(!isset($no)){
                        //     echo "sus";
                        // }
                    
                    
                } 
            }
            echo "<script>
                alert('done!');
            </script>";
            header("location: cart.php");
        
    }
    
    
        
        
        
        
        
        // echo($item["User"]);
        // if($item["User"] == $_SESSION["email"]){
            
        // }
    }
?>