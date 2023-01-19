<?php include '../view/header.php'; ?>
<main>
    <h1>Customer Login</h1>
    <td><form action="." method="post">
    <label>You must login before you can register a product.</label>
    <br>
                    <input type="hidden" name="action"
                           value="find_customer">
                   
                    <label>Email</label>
                    <input type ="text" name ="email" />
                    <input type="submit" value="Login">
                </form></td>

</main>
<?php include '../view/footer.php'; ?>

