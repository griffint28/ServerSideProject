
<?php include '../view/header.php'; ?>

<h1>Register Product</h1>
    
        <form action="." method="post" id="register_product_form">
        <input type="hidden" name="action" value="register_product">
        <?php //id shows up her ?>
        <input type="hidden" name="customerID" id="hiddenField" value= "<?php echo $customerID['customerID']; ?>" />
  
        <label>Customer:</label>
        <td><?php echo $customerID['firstName']." ".$customerID['lastName']; ?></td>
        <br>
        
        <label>Product:</label>
        <select name="product_code">
                    <?php foreach($products as $product){?>
                        <option value="<?php echo $product['productCode']?>"><?php echo $product['name']." ".$product['version']?></option>
                    <?php } ?>
                         
                    </select>
        <br>
        
        
        <label>&nbsp;</label>
        <input type="submit" value="Register Product" />
        </form>
        <br>
        
         <label> You are logged in as <?php echo $customerID['email']; ?> </label>
        <br>
        
        <form action="." method="post" id="logout">
        <input type="hidden" name="action" value="logout">
        <label>&nbsp;</label>
        <input type="submit" value="Logout" />
        </form>
        <br>

        
 
</main>
<?php include '../view/footer.php'; ?>
