<style>
.obsah{
    float: center;
    width: 98%;
    height: 85%;
    
}
button{
    background-color: #dc3545;
    color: white;
    text-align: center;
    border: 2px solid #dc3545;
    border-radius: 15px;
    padding: 15px 32px;
    transition-duration: 0.5s;
    margin-left: 33%;
    
}
.footer {
    text-align: center;
    margin-bottom: 0%;
    background-color: #dc3545;
    width: 100%;
    height: 5%;
    color: white;
}
</style>
<div class="container obsah">
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
</div>
<h5 class="footer">Vytvořil: Peťa Rídl</h5>
</body>
</html>