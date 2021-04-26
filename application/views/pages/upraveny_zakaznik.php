<style>
.obsah{
    float: center;
    width: 98%;
    height: 85%;
    margin-left: 10%;
    
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
</style>
</br>
<div class="obsah">
<?php foreach($trouba as $t)?>
<form method="post" action='<?php echo base_url();?>/HlavniStrana/upravitZakaznika/<?php echo $t->idmajitele?>'>
    <div class="form-group">
        <label>Jméno</label>
        <input type="text" name='jmeno' class="form-control" value="<?php echo $t->jmeno?>">
        <label>Příjmení</label>
        <input type="text" name='prijmeni' class="form-control" value="<?php echo $t->prijmeni?>">
        <label>Adresa</label>
        <input type="text" name='adresa' class="form-control" value="<?php echo $t->adresa?>">
        <label>Telefon</label>
        <input type="text" name='telefon' class="form-control" value="<?php echo $t->telefon?>">
        <label>Email</label>
        <input type="text" name='email' class="form-control" value="<?php echo $t->email?>">
        
        
        </br>
        <button type="submit">Upravit</button>
    </div>
</form>
</div>