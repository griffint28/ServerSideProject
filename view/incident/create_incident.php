<?php include '../view/header.php'; ?>

<h1>Create Incident</h1>
    <form action="." method="post" id="create_incident_form">
        <input type="hidden" name="action" value="create_incident">
  
        <label>Customer:</label>
        <td><?php echo $customer['firstName']." ".$customer['lastName']; ?></td>
        <br>
        
        <label>Product:</label>
        <select name="product_code">                    
                    <?php foreach($products as $product){?>
                        <option value="<?php echo $product['productCode']?>"><?php echo $product['productCode']?></option>
                    <?php } ?>
                        
                    </select>
        <br>
        <label>Title:</label>
        <input type ="text" name ="title">
        <br>
        
        <label>Description:</label>
        <textarea name="description" rows="6" cols="40">Please enter 
        description of incident here
        </textarea>
        <br>
        
        
 
        <label>&nbsp;</label>
        <input type="submit" value="Create Incident" />
        <br>
        <input type="hidden" name="customer_ID"
                           value="<?php echo $customer['customerID']; ?>">
        </form>
 
</main>
<?php include '../view/footer.php'; ?>

