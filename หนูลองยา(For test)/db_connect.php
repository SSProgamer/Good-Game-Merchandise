<?php
// If you want to connect just
// include "db_connect.php";
// Every page that use to connect database
// ลดบรรทัดแถมโค้ดละอาดตามากขึ้น

// Connect to Database 
class MyDB extends SQLite3 {
    function __construct() {
       $this->open('ggm.db'); //database file
    }
 }

 // Open Database 
 $db = new MyDB();
 if(!$db) {
    echo $db->lastErrorMsg();
 } else {
    // echo "Opened database successfully<br>";
 }
?>