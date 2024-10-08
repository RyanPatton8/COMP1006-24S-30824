<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        <!-- add category rows here -->
        <?php foreach ($categories as $category) : ?>
         <tr>
            <td><?php echo $category['categoryName']; ?></td>
            <td>
                <form action="." method="post">
                    <input type="hidden" name="action" value="delete_category">
                    <input type="hidden" name="categoryID" value="<?php echo $category['categoryID'];?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
         </tr>
         <?php endforeach; ?>
    </table>

    <h2>Add Category</h2>
    <!-- add code for form here -->
    <form action="index.php" method="post" id="add_category_form">
    <input type="hidden" name="action" value="add_new_category">
        <label>New Category Name:</label>
        <input type="text" name="newCategoryName" />
        <br>
        <label>&nbsp;</label>
        <input type="submit" value="Add" />
        <br>
    </form>
    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>