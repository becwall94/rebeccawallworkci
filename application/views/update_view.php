<form  action="edit"  method="POST" name="myform">
    <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
    Product Name :<input type="text" name="Name" value="<?php echo $result['Name'] ?>"></br>
    Product Type :<input type="text" name="Type" value="<?php echo $result['Type'] ?>"></br>
    Product Price:<input type="text" name="Price" value="<?php echo $result['Price'] ?>"></br>

    <input type="submit" value="update" name="submit">
</form>