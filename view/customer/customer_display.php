<?php include '../view/header.php'; ?>
<main>
    <h1>Customer Search</h1>
    <td>
        <form action="." method="post">
            <label>Last Name</label>
            <input type="hidden" name="action" value="searchResults">        
            <input type ="text" name ="lastName" />
            <input type="submit" value="Search">
        </form>
    </td>
    <h2>Results</h2>
<section>
        <table>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>City</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($customers as $customer) : ?>
            <tr>
                <td><?php echo $customer['firstName']." ".$customer['lastName']; ?></td>
                <td><?php echo $customer['email']; ?></td>
                <td><?php echo $customer['city']; ?></td>
                <td><form action="." method="post">
                <form action ="." method="post">
                    <input type ="hidden" name ="action" value="customerSelection">
                    <input type="hidden" name="customerID" value="<?php echo $customer['customerID']; ?>">
                    <input type="submit" value="Select">
                </form></td>
            </tr>
            <?php endforeach; ?>
         </table>
    </section>
</main>
<?php include '../view/footer.php'; ?>

