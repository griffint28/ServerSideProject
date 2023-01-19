<?php
require('../model/database.php');
require('../model/customer_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'customerSearch';
    }
}

switch ($action){
    
    case 'customerSearch':
        include('../view/customer/customer_search.php');
    break;

    case 'searchResults':
            $lastName = filter_input(INPUT_POST, 'lastName');
            $customers = get_customers_by_last_name($lastName);
            include ('../view/customer/customer_display.php');
    break;

    case 'customerSelection':
            $customerID = filter_input(INPUT_POST, 'customerID');
            $customer = get_customer($customerID);
            $customerCountry = get_customer_country($customer['countryCode']);
            $countries = get_countries();
            include ('../view/customer/customer_update.php');     
    break;

    case 'update_customer':
            $customerID = filter_input(INPUT_POST, 'customerID');
            $firstName = filter_input(INPUT_POST, 'firstName');
            $lastName = filter_input(INPUT_POST, 'lastName');
            $address = filter_input(INPUT_POST, 'address');
            $city = filter_input(INPUT_POST, 'city');
            $state = filter_input(INPUT_POST, 'state');
            $postalCode = filter_input(INPUT_POST, 'postalCode');
            $countryCode = filter_input(INPUT_POST, 'countryCode');
            $phone = filter_input(INPUT_POST, 'phone');
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');

            update_customer($customerID, $firstName, $lastName, $address, $city, $state, $postalCode, $countryCode, $phone, $email, $password);

            header("Location: index.php");
    break;
    }
?>

