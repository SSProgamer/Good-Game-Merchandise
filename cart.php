<?php
    // session_start();
    include "navbar.php";
    
    if(!isset($_SESSION['email'])){
        header("location: login.php");
    }
    // array_push($_SESSION['cart'], array("User" => "Customer"));
    // print_r($_SESSION['cart']);
?>

<html lang="en">

<body>
    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Unit</th>
            <th></th>
        </tr>
        <?php
            foreach ($_SESSION['cart'] as $user=> $cart){
                if($cart["User"] == $_SESSION["email"]){
                    echo '<tr>
                        <td>'.$cart['Proname'].'</td>
                        <td>'.$cart['Price'].'</td>
                        <td>'.$cart['Amount'].'</td>
                        <td>'.$user.'</td>
                    </tr>';
                }
            }
        ?>
        <tr>

        </tr>
    </table>    
</body>
</html>