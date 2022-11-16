<?php
session_start();
include "db_connect.php";
echo $_GET['addproid'];
if (isset($_GET['addproid'])) {
    if (!isset($_SESSION["email"])) {
        //Maybe add alert message ot not?
        header("location: login.php");
    } else {
        $sql2 = "SELECT * FROM Merchandise WHERE ID = " . $_GET['addproid'] . "";
        $result2 = $db->query($sql2);
        if(!$result2){
            print "bruh";
        }
        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = array();
        }
        else{
            // array_push($_SESSION['cart'], array("User" => "Customer"));
            while ($item = $result2->fetchArray(SQLITE3_ASSOC)) {
                array_push($_SESSION["cart"], array("User" => $_SESSION['email'], "ProductID" => $item["ID"], "Proname" => $item["NameProduct"], "Price" => $item["Price"], "Amount" => 1));
            }
            unset($_GET['addproid']);
            header("location: cart.php");
        }
        
        
    }
}
?>