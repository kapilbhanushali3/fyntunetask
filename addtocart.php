<?php
session_start();

//$_SESSION['cart'] = array();
$id = $_GET['pid'];
$price = $_GET['price'];
$pname = $_GET['pname'];

$newitem = array(
    'pname' => $pname,
    'price' => $price, 
    'quantity' => '1'
    );

if(!empty($_SESSION['cart']))
    {    
        //and if session cart same 
        if(isset($_SESSION['cart'][$id]) == $id) {
            $_SESSION['cart'][$id]['quantity']++;
        } else { 
            //if not same put new storing
            $_SESSION['cart'][$id] = $newitem;
        }
    } else  {
        $_SESSION['cart'] = array();
        $_SESSION['cart'][$id] = $newitem;
    }

//$_SESSION['cart'][$id] = array();

//$_SESSION['cart'][$id]['quantity']++; // another of this item to the cart
//unset($_SESSION['cart'][$id]); //remove the item from the cart
echo "successfully added";
?>