<?php

function get_customer($email){  
    global $db;
    $query = 'SELECT * FROM customers
              WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    return $customer;
}
function new_incident($customer_ID, $product_code, $title, $description){
    global $db;
    $date = date("Y-m-d H:i:s");
    $query = 'INSERT INTO incidents
                 (customerID, productCode, title, description, dateOpened)
              VALUES
                 (:customer_ID, :product_code, :title, :description, :date)';
    $statement = $db->prepare($query);
    $statement->bindValue(':customer_ID', $customer_ID);
    $statement->bindValue(':product_code', $product_code);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':date', $date);
    $statement->execute();
    $statement->closeCursor();
}

function get_registered_products($customer_ID){
    global $db;
    $query = 'SELECT * FROM registrations
              WHERE customerID = :customer_ID';
    $statement = $db->prepare($query);
    $statement->bindValue(':customer_ID', $customer_ID);
    $statement->execute();
    $registered_products = $statement->fetchAll();
    $statement->closeCursor();
    return $registered_products;
}
?>
