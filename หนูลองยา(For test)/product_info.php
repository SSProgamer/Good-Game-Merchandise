<?php
//หน้ารายละเอียดสินค้า
    $request = $_REQUEST['p_id'];
    include 'db_connect.php';
    include 'navbar.php';
    $sql = "SELECT * FROM Product 
    WHERE P_id = $request";
    $result = $db->query($sql);
    if(!$result){
        echo "error";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="container-fluid">

    </div>
    <?php
        while($product = $result->fetchArray(SQLITE3_ASSOC)){
            echo $product['P_name'];
            echo $product['P_desc'];
            echo $product['P_brand'];
            echo $product['P_price'];
            // echo $product['']
        }
    ?>
</body>
</html>
