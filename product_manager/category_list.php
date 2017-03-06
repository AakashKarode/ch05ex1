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
          <td><?php echo $category['categoryID']; ?></td>
          <td><?php echo $category['categoryName']; ?></td>
          <td><form action="delete_category.php" method="post">
              <input type="hidden" name="category_id"
                      value="<?php echo $category['categoryID']; ?>">
              <input type="submit" value="Delete">
          </form></td>  
          <?php endforeach; ?>  
        </tr>
    </table>

    <h2>Add Category</h2>
    <!-- add code for form here -->

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>