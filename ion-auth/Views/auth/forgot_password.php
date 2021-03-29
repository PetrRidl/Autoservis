<style>
.obsah{
    float: center;
    width: 98%;
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
</style>
<div class="obsah">
<h1><?php echo lang('Auth.forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('Auth.forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/forgot_password');?>

      <p>
      	<label for="identity"><?php echo (($type === 'email') ? sprintf(lang('Auth.forgot_password_email_label'), $identity_label) : sprintf(lang('Auth.forgot_password_identity_label'), $identity_label));?></label> <br />
      	<?php echo form_input($identity);?>
      </p>

      <p><?php echo form_submit('submit', lang('Auth.forgot_password_submit_btn'));?></p>

<?php echo form_close();?>
</div>
<h5 class="footer">Vytvořil: Peťa Rídl :3 </h5>