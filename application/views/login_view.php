<div class="row">
<div class="one-half column">
<div id="content">

 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("Login/login"); ?>
  <label for="Email">Email:</label>
  <input type="text" id="Email" name="Email" value="" />
  <label for="Password">Password:</label>
  <input type="password" id="Password" name="Password" value="" />
  <input type="submit" class="" value="Sign in" />
 <?php echo form_close(); ?>
  </div></div></div>