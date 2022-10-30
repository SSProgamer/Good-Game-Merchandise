<?php
//ทดสอบหน้าสินค้ารวม
    include 'db_connect.php';
    
    $sql="SELECT * FROM Product";
    $result = $db->query($sql);
    if(!$result){
        echo "Error";
    }
    else{
        include 'navbar.php';
    }

?>
<html lang="en">
<head>
    <title>All Products</title>
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row">
        <?php
            
            while($product = $result->fetchArray(SQLITE3_ASSOC)){
            echo '<div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <form action="product_info.php?p_id='.$product['P_id'].'" method="post">
                        <img src="" alt="'.$product['P_name'].'">
                        <div class="card-body">
                            <p>'. $product['P_name'].'</p><br>
                            <p>'.$product['P_desc'].'</p><br>
                            <p>'.$product['P_price'].'</p>
                            <button type="submit" name="pro_id" value="'.$product['P_id'].'">More detail</button>
                        </div>
                    </form>
                </div>
            </div>';
            }?>    
        </div>
    </div>
    <?php include "footer.html";?>
</body>
</html>
