<?php
require('../model/database.php');
require('../model/customer_db.php');
require('../model/registration_db.php');
require('../model/product_db.php');

session_start();

$action = filter_input(INPUT_POST, 'action');

if ($action == NULL && isset($_SESSION['$customerID'])) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'find_customer';
    }
}

else if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'get_customer';
    }
}

if ($action == 'get_customer'){
    include('../view/registration/login.php');
}

else if($action == 'find_customer'){
    if(isset($_SESSION['$customerID'])){
        $customerID = $_SESSION['$customerID'];
        $products = $_SESSION['products'];
    }else{
        $email = filter_input(INPUT_POST, 'email');
        if($email == '' || $email == NULL){
            $error = "Email required to Login";
            include('../errors/error.php');
        }
        $customerID = get_customer_by_email($email);
        $products = get_products();
        $_SESSION['$customerID'] = $customerID;
        $_SESSION['products'] = $products;
    }
    include ('../view/registration/product_register.php');
    
}

else if($action == 'register_product'){
    $customerID = $_SESSION['$customerID'];
    $customer_ID = $customerID['customerID'];
    $product_code = filter_input(INPUT_POST, 'product_code');
    add_registration($customer_ID, $product_code);
    include ('../view/registration/register_success.php');
}

else if($action == 'logout'){
    $_SESSION = array();
    include('../view/registration/login.php');
    
}


?>

