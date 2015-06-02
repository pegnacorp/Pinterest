<div class="content">

  <div class="container">
    <h1><?php echo lang('login_heading');?></h1>
      <p><?php echo lang('login_subheading');?></p>

      <div id="infoMessage"><?php echo $message;?></div>

      <?php echo form_open("auth/login");?>

         <div class="form-group">
          <?php echo lang('login_identity_label', 'identity');?> 
          <br>
          <?php echo form_input($identity);?>
        </div>

        <div class="form-group">
          <?php echo lang('login_password_label', 'password');?>
          <br>
          <?php echo form_input($password);?>
        </div>

        <div class="form-group">
          <?php echo lang('login_remember_label', 'remember');?>
          <br>
          <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
        </div>


        <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

      <?php echo form_close();?>
      
     <p><?php echo anchor('auth/forgot_password', lang('login_forgot_password'));   ?></p>
  </div>



</div>