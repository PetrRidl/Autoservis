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
<h1><?php echo lang('deactivate_heading');?></h1>
<p><?php echo sprintf(lang('deactivate_subheading'), $user->{$identity}); ?></p>

<?php echo form_open("auth/deactivate/".$user->id);?>

  <p>
  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
    <input type="radio" name="confirm" value="yes" checked="checked" />
    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
    <input type="radio" name="confirm" value="no" />
  </p>

  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(['id' => $user->id]); ?>

  <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

<?php echo form_close();?>
</div>
<h5 class="footer">Vytvořil: Peťa Rídl</h5>
</body>
</html>