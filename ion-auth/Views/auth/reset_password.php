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
<h1><?php echo lang('Auth.reset_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/reset_password/' . $code);?>

	<p>
		<label for="new_password"><?php echo sprintf(lang('Auth.reset_password_new_password_label'), $minPasswordLength);?></label> <br />
		<?php echo form_input($new_password);?>
	</p>

	<p>
		<?php echo form_label(lang('Auth.reset_password_new_password_confirm_label'), 'new_password_confirm');?> <br />
		<?php echo form_input($new_password_confirm);?>
	</p>

	<?php echo form_input($user_id);?>

	<p><?php echo form_submit('submit', lang('Auth.reset_password_submit_btn'));?></p>

<?php echo form_close();?>
</div>
<h5 class="footer">Vytvořil: Peťa Rídl :3 </h5>
