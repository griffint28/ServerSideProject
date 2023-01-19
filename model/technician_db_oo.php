<?php

class technician_db_oo {
    
    
public static function get_technicians(){  
    
    $db = database::getDB();
    
    $query = 'SELECT * FROM technicians
              ORDER BY lastName';
    $statement = $db->prepare($query);
    $statement->execute();
    $rows = $statement->fetchAll();
    $statement->closeCursor();
    
    foreach ($rows as $row){
        
        $technician = new technician(
                $row['firstName'],
                $row['lastName'],
                $row['email'],
                $row['phone'],
                $row['password']
        );
        $technician->setID($row['techID']);
        $technicians[] = $technician;
        
    }
    
    return $technicians;

}


public static function add_technician($technician){
    $db = database::getDB();
    
    $first_name = $technician->getFirstName();
    $last_name = $technician->getLastName();
    $email = $technician->getEmail();
    $phone = $technician->getPhone();
    $password = $technician->getPassword();
    
    
    $query = 'INSERT INTO technicians
                 (firstName, lastName, email, phone, password)
              VALUES
                 (:first_name, :last_name, :email, :phone, :password)';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
    
}

public static function delete_technician($id) {
    
    
    $db = database::getDB();
    
    $query = 'DELETE FROM technicians
              WHERE techID = :tech_ID';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':tech_ID', $id);
    $statement->execute();
    $statement->closeCursor();
            
}



}//end of class 
