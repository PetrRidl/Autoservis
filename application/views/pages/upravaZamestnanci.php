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
<?php foreach($zamestnanec as $z)?>
<form method="post" action='<?php base_url();?>/HlavniStrana/upravitZamestnance/<?php echo $z->osobnicislo;?>'>
    <div class="form-group">
        <label>Jméno</label>
        <input type="text" name='jmeno' class="form-control" value="<?php echo $z->jmeno;?>">
        <label>Příjmení</label>
        <input type="text" name='prijmeni' class="form-control" value="<?php echo $z->prijmeni;?>">
        
        </br>
        <button type="submit">Upravit</button>
    </div>
</form>
</div>