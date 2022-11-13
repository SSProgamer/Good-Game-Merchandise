<?php
    session_start();
    if(!isset($_SESSION["test"])){
        $_SESSION["test"] = array("user" => "customer");
    }
    array_push($_SESSION["test"]["customer"], array("user"=>"customer"));
    print_r($_SESSION["test"]["customer"]);
    if(isset($_POST["del"])){
        unset($_SESSION["test"]);
    }
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <button type="submit" name="del">bruh</button>
</form>