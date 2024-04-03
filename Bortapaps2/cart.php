<?php

if(isset($_POST['cart-item'])){
    $itemId = $_POST['cart-item'];

    unset($_POST['cart-item']);
}



?>