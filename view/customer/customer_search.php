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

</main>
<?php include '../view/footer.php'; ?>
