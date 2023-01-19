<?php include '../view/header.php'; ?>
<main>
    <h1>View/Update Customer</h1>
    <form action="index.php" method="post" id="update_customer_form">
        <input type="hidden" name="action" value="update_customer">
  
        <input type="hidden" name="customerID" value="<?php echo $customer['customerID']; ?>">

        <label>First Name:</label>
        <input type="text" name="firstName" value="<?php echo $customer['firstName']; ?>"/>
        <br>
        
        <label>Last Name:</label>
        <input type="text" name="lastName" value="<?php echo $customer['lastName']; ?>"/>
        <br>
 
        <label>Address:</label>
        <input type="text" name="address" value="<?php echo $customer['address']; ?>"/>
        <br>
        
        <label>City:</label>
        <input type="text" name="city" value="<?php echo $customer['city']; ?>"/>
        <br>
        
        <label>State:</label>
        <input type="text" name="state" value="<?php echo $customer['state']; ?>"/>
        <br>
 
        <label>Postal Code:</label>
        <input type="text" name="postalCode" value="<?php echo $customer['postalCode']; ?>"/>
        <br>
      
        <label>Country:</label>
        <select name="countryCode">   
            <?php foreach($countries as $country){
                if ($country['countryName'] == $customerCountry["0"]["0"]) {?>
                    <option value="<?php echo $country['countryCode']?>" selected ><?php echo $country['countryName']?></option>
                <?php }else{ ?>
                    <option value="<?php echo $country['countryCode']?>"><?php echo $country['countryName']?></option>
                <?php } ?>
           <?php } ?>
        </select>
        <br>
        
        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo $customer['phone']; ?>"/>
        <br>
 
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $customer['email']; ?>"/>
        <br>
        
        <label>Password:</label>
        <input type="text" name="password" value="<?php echo $customer['password']; ?>"/>
        <br>
 
        <label>&nbsp;</label>
        <input type="submit" value="Update Customer" />
        
    </form>
    <p class="last_paragraph">
        <a href="index.php">
            Search Customers
        </a>
    </p>
 
</main>
<?php include '../view/footer.php'; ?>

