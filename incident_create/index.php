<?php
require('../model/database.php');
require('../model/incident_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'get_customer';
    }
}
if ($action == 'get_customer'){
    include('../view/incident/get_customer.php');
}

else if ($action == 'find_customer') {
    $email = filter_input(INPUT_POST, 'email');
    $customer = get_customer($email);
    $customer_ID = $customer['customerID'];
    $products = get_registered_products($customer_ID);
    include ('../view/incident/create_incident.php');
}

else if ($action == 'create_incident') {
    $customer_ID = filter_input(INPUT_POST, 'customer_ID');
    $product_code = filter_input(INPUT_POST, 'product_code');
    $title = filter_input(INPUT_POST, 'title');
    $description = filter_input(INPUT_POST, 'description');
    new_incident($customer_ID, $product_code, $title, $description);
    include ('../view/incident/incident_added.php');
}

?>