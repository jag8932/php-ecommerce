<?php
    include './header.php'

?>
<form id="create-product" action="./handler/create-product.php" method="POST" enctype="multipart/form-data">
<h2>Create a Product</h2>
<p>Product Name</p><input type="text" name="prodName" placeholder="Product Name">
<p>Tags (Separate by commas)</p><input type="text" name="tags" placeholder="Item Tags">
<p>Description</p><textarea id="prodDescription" name="prodDesc" rows="10" cols="50"></textarea>
<p>Image</p><input type="file" name="file"><br>
<br><button type="submit" name="submit" width="100px">Submit</button>
</form>

<?php
    include './footer.php'
?>