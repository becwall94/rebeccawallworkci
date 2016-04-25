<div class="row">
<div class="one-half column">
 <?php echo validation_errors('<p class="error">'); ?>
<form method="post" action="<?php echo base_url();?>index.php/Product/insert_product">
<table width="400" border="0" cellpadding="5">
<tr>
<th width="213" align="right" scope="row">Enter product name:</th>
<td width="161"><input type="text" name="Name" size="20" /></td>
</tr>
<tr>
<th align="right" scope="row">Enter a product type:</th>
<td><input type="text" name="Type" size="20" /></td>
</tr>
<tr>
<th align="right" scope="row">Enter product price:</th>
<td><textarea name="Price" rows="1" cols="20"></textarea></td>
</tr>
<tr>
<th align="right" scope="row">&nbsp;</th>
<td><input type="submit" name="submit" value="Send" /></td>
</tr>
</table>
</form>
</div></div>