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
<h1><?php echo lang('Auth.edit_group_heading');?></h1>
<p><?php echo lang('Auth.edit_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url());?>

      <p>
            <?php echo form_label(lang('Auth.edit_group_name_label'), 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo form_label(lang('Auth.edit_group_desc_label'), 'description');?> <br />
            <?php echo form_input($group_description);?>
      </p>

      <p><?php echo form_submit('submit', lang('Auth.edit_group_submit_btn'));?></p>

<?php echo form_close();?>
</div>
<h5 class="footer">Vytvořil: Peťa Rídl :3 </h5>