<div class="row">
<div class="one-half column">
<h2>Products</h2>

<table width="700" border="1" cellpadding="5">

<tr>

<th scope="col">Id</th>

<th scope="col">Name</th>

<th scope="col">Type</th>

<th scope="col">Price</th>
</tr>

<?php foreach ($product_list as $p_key){ ?>

<tr>

<td><?php echo $p_key->id; ?></td>

<td><?php echo $p_key->Name; ?></td>

<td><?php echo $p_key->Type; ?></td>

<td><?php echo $p_key->Price; ?></td>
<td width="40" align="left" ><?php echo anchor('Product/edit/'.$p_key->id, 'edit'); ?></td>

<td width="40" align="left" ><?php echo anchor('Product/delete/'.$p_key->id, 'Delete'); ?></td>
</tr>
<?php }?>

<tr>

<td colspan="7" align="right"> <a href="<?php echo base_url();?>index.php/Product/add_form">Insert New Product</a></td>
</tr>


</table>

</div></div>