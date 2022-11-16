<?php
    // session_start();
    include "navbar.php";
    
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
            foreach ($_SESSION['cart'] as $user=> $car){
                if($cart["User"] == $_SESSION["email"]){
                    echo '<tr>
                        <td>'.$cart['ProductName'].'</td>
                        <td>'.$cart['Price'].'</td>
                        <td>'.$cart['Amount'].'</td>
                        <td></td>
                    </tr>';
                }
            }
        ?>
        <tr>

        </tr>
    </table>    
</body>
</html>