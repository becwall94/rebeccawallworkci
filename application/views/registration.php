<div class="row">
<div class="one-half column">
<div class="reg_form">
<div class="form_title">Register</div>
 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("Register/registration"); ?>
  <p>
  <label for="username">User Name:</label>
  <input type="text" id="username" name="username" value="<?php echo set_value('username'); ?>" />
  </p>
  <p>
  <label for="Email">Your Email:</label>
  <input type="text" id="Email" name="Email" value="<?php echo set_value('Email'); ?>" />
  </p>
  <p>
  <label for="Password">Password:</label>
  <input type="password" id="Password" name="Password" value="<?php echo set_value('Password'); ?>" />
  </p>
  <p>
  <input type="submit" class="greenButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>
</div>
</div>
</div>