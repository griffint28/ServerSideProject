<?php include '../view/header.php'; ?>
<main>
    <h1>Get Customer</h1>
    <td><form action="." method="post">
    <label>You must enter the customer's email address to select the customer.</label>
    <br>
                    <input type="hidden" name="action"
                           value="find_customer">
                   
                    <label>Email</label>
                    <input type ="text" name ="email" />
                    <input type="submit" value="Get Customer">
                </form></td>

</main>
<?php include '../view/footer.php'; ?>

