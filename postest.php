<?php
//for test only
include "navbar.php";
// $sql2 = 'UPDATE Customer SET "FirstName" = "'.$_POST['fname'].'", "LastName" = "'.$_POST['lname'].'", "Address"= "'.$_POST['address'].'", "City"= "'.$_POST['city'].'","Province"="'.$_POST['province'].'",Postcode="'.$_POST['postcode'].'",phonenumber="'.$_POST['phone'].'" WHERE "CustomerID" = "'.$_SESSION["ID"].'"';
// $result2 = $db->query($sql2);
// if(!$result2){
//     echo "bruh";
// }

print_r($_SESSION['cart']);
?>