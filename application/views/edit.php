<div class="row">
<div class="one-half column">
    
<h5>Edit Product</h5>
<?php echo form_open('Product/update');
foreach($product_list as $value) { ?>
    
<p>
    <input type="hidden" name="id" id="id" value="<?php echo $value->id; ?>">
    <label for="Name">Name</label>
    <input type="text" name="Name" id="Name" value="<?php echo $value->Name; ?>">
</p>
<p>
    <label for="Type">Type</label>
    <input type="text" name="Type" id="Type" value="<?php echo $value->Type; ?>">
    
</p>
<p>
    <label for="Price">Price</label>
    <input type = "text" name="Price" id="Price"  value="<?php echo $value->Price; ?>">
</p>
<button id="submitbtn">Submit</button>
<?php } echo form_close(); ?>

</div></div>