<?php $this->load->helper('form'); ?>
 
<?php echo form_open('Product/update'.$id); ?>
 
    <p>
        <?php echo form_input('Name'); ?>
    </p>
 
    <p>
        <?php echo form_input('Type'); ?>
    </p>
 
    <p>
        <?php echo form_input('Price'); ?>
    </p> 
 
    <p>
        <?php echo form_submit('submit', 'Submit'); ?>
    </p>
 
<?php echo form_close(); ?>
