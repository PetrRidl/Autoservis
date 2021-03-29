<style>
.obsah{
    float: center;
    
    height: 85%;
    margin-left: 40%;
}
.footer {
    text-align: center;
    margin-bottom: 0%;
    background-color: #dc3545;
    width: 100%;
    height: 5%;
    color: white;
}
a{
  color: #dc3545;
}
a:hover{
  color: #dc3545;
}
</style>
<div class="obsah">
<h1><?php echo lang('Auth.login_heading');?></h1>
<p><?php echo lang('Auth.login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/login');?>

  <p>
    <?php echo form_label(lang('Auth.login_identity_label'), 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo form_label(lang('Auth.login_password_label'), 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo form_label(lang('Auth.login_remember_label'), 'remember');?>
    <?php echo form_checkbox('remember', '1', false, 'id="remember"');?>
  </p>

  
  <p><?php echo form_submit('submit', lang('Auth.login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('Auth.login_forgot_password');?></a></p>
</div>
<h5 class="footer">Vytvořil: Peťa Rídl :3 </h5>
