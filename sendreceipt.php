<?php
    include "navbar.php";
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
    <form action="#" method="post" id="receipt">
        
        <input type="file" name="image" id="image">
        <input type="text" name="account" id="account">
        <input type="text" name="amount" id="amount">
        <input type="datetime-local" name="date" id="date">
        <button type="submit">Submit your reciept</button>
        
    </form>
</body>
</html>