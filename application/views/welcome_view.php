<div class="row">
 <div class="two-thirds column" style="margin-top: 1%">

  <h4>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h4>
  <h5><?php echo anchor('Login/logout', 'Logout'); ?></h5> <br>
  <h5><?php echo anchor('Login/account', 'Account'); ?></h5>
</div></div>