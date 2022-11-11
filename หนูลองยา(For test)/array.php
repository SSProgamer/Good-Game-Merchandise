<?php
    session_start();
    if(!isset($_SESSION["cart"])){
        $_SESSION["cart"];
    }
    else if(count){
        unset($_SESSION["cart"]);
    }
    else{
        //
    }
    // $_SESSION["cart"] = array(1=>array("Product" => "Product1", "Price" => 5000, "Amount" => 1),
    // 2=>array("Product" => "Product1", "Price" => 5000, "Amount" => 1),
    // 3=>array("Product" => "Product1", "Price" => 5000, "Amount" => 1),
    // );
    // echo $test[1];
    // array_push($_SESSION["cart"],array("Product" => "Product1", "Price" => 5000, "Amount" => 1));
    echo count($_SESSION['cart']);
    
    foreach ($_SESSION['cart'] as $user => $cart){
        echo $user;
        echo $cart["Product"];
        echo $cart["Price"];
        echo $cart["Amount"];
        echo '<form action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" method="post">';
        echo '<input type="submit" name="delete" value="'.$user.'">';
        echo '</form>';
        echo "<br>";
    }
    if(isset($_POST['delete'])){
        //
        // array_pop($_SESSION["cart"]);
        unset($_SESSION["cart"][$_POST['delete']]);

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
    
</body>
</html>