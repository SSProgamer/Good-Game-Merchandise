<?php
session_start();
$dupli = false;
include "db_connect.php";
// echo $_GET['addproid'];
if (isset($_GET['addproid'])) {
    if (!isset($_SESSION["email"])) {
        //Maybe add alert message ot not?
        header("location: login.php");
    } else {
        $sql2 = "SELECT * FROM Merchandise WHERE ID = " . $_GET['addproid'] . "";
        $result2 = $db->query($sql2);
        if (!$result2) {
            print "bruh";
        }
        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = array();
        } else {
            while ($check = $result2->fetchArray(SQLITE3_ASSOC)) {
                //checking duplicate cart item
                foreach ($_SESSION['cart'] as $user => $cart) {
                    if ($cart["ProductID"] == $check["ID"]) {
                        $dupli = true;
                    }
                }
            }
            //if not find a duplicate add it in cart   
            if (!$dupli) {
                while ($item = $result2->fetchArray(SQLITE3_ASSOC)) {
                    array_push($_SESSION["cart"], array("User" => $_SESSION['email'], "ProductID" => $item["ID"], "Proname" => $item["NameProduct"], "Price" => $item["Price"], "Amount" => 1));
                }
            }
            //after add item to cart อยากทำอะไรหลังเพิ่มเสร็จ
            unset($_GET['addproid']);
            // header("location: cart.php");
            sleep(2);
            $referer = $_SERVER['HTTP_REFERER'];
            header("Location: $referer");
        }
    }
}
