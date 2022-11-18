<?php
    include "navbar.php";
    if(!isset($_SESSION['email'])){
        header("location: header.php");
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $target_dir = "admin/reciept";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(isset($_POST["submit"])){
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
                $sql = "INSERT INTO ''";
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
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
            <option value=""></option>
            <option value="1">1</option>
            <option value="1">1</option>
            <option value="1">1</option>
            <option value="1">1</option>
            <option value="1">1</option>
        </select>
    <form action="#" method="post" id="receipt" enctype="multipart/form-data">
        
        <input type="file" name="image" id="image">
        <input type="text" name="account" id="account">
        <input type="text" name="amount" id="amount">
        <input type="datetime-local" name="date" id="date">
        <button type="submit" name="submit">Submit your reciept</button>
        
    </form>
</body>
</html>