<?php
include "navbar.php";
// $sql = "INSERT INTO 'Receipt' (ID, CustomerID, Ord_id, Re_amount, Re_image, Re_date, Re_account)
// VALUES (NULL, $_SESSION['ID'], $_POST['order'], $_POST['amount'], image,$_POST['date'], $_POST['accouunt'])";
if (!isset($_SESSION['email'])) {
    header("location: login.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Directory ที่จะใส่รูป
    $target_dir = "admin/receipt/";
    //ตัวแปรcheckว่ามีรูปซ้ำมั้ย
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    //ตัวแปรดดึงนามสกุลไฟล์
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        
    ) {
        echo "Sorry, only JPG, JPEG, PNG files are allowed.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // upload สำเร็จ ทำSQL
            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            $sqlinsert = "INSERT INTO 'Receipt' (ID, CustomerID, Ord_id, Re_amount, Re_image, Re_date, Re_account)
            VALUES (NULL, ".$_SESSION['ID'].", ".$_POST['order'].", ".$_POST['amount'].", ".basename( $_FILES['image']['name']).",".$_POST['date'].", ".$_POST['accouunt']."";
            $result3 = $db->query($sqlinsert);
            if(!$result3){
                echo $db->lastErrorMsg();
                echo "error";
            }
            else{
                $update = "UPDATE Order
                SET Order_Status = 'Pending' 
                WHERE Order_ID = ".$_POST['order']."";
                $result2 = $db->query($update);
                if(!$result2){
                    echo $db->lastErrorMsg();
                }
                else{
                    //เตือนว่าได้ส่งแล้ว
                    header("location: orders.php");
                }
                
            }
            
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
}
?>
<html lang="en">

<head>
    <title>Send Reciept</title>
</head>

<body>
    <select name="order" id="order" form="receipt" required>
        <option value="">=====Select Order you want to pay=====</option>
    <?php
        $order = "SELECT * FROM 'Order' WHERE CustomerID =".$_SESSION["ID"]." AND Order_status = 'wait_payment'";
        $result = $db->query($order);
        if(!$result){
            echo $db->lastErrorMsg();
        }
        else{
            while($n_payorder = $result->fetchArray(SQLITE3_ASSOC)){
                echo '<option value="'.$n_payorder["Order_ID"].'">OrderID: '.$n_payorder["Order_ID"].'  at '.$n_payorder["Ord_date"].'  Total: '.number_format($n_payorder["Ord_total"]) .'</option>';
            }
        }
    ?>
        
    </select>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="receipt" enctype="multipart/form-data">

        <input type="file" name="image" id="image"><br>
        <input type="text" name="account" id="account"><br>
        <input type="text" name="amount" id="amount"><br>
        <input type="datetime-local" name="date" id="date"><br>
        <button type="submit" name="submit">Submit your reciept</button><br>

    </form>
</body>

</html>