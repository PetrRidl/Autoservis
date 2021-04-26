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
    
}
</style>
</br>
<div class="obsah">
<?php foreach($auto as $a)?>
<form method="post" action='<?php echo base_url();?>/HlavniStrana/UpravObjednavku/<?php echo $a->idautomobily?>'>
    <div class="form-group">
    
        <label>Výrobce vozu</label>
        <input type="text" name='vyrobce' class="form-control" value="<?php echo $a->vyrobce ?>">
        <label>Typ vozu</label>
        <input type="text" name='typ_vozu' class="form-control" value="<?php echo $a->typ_vozu?>">
        <label>Registrační značka</label>
        <input type="text" name='registracni_znacka' class="form-control" value="<?php echo $a->registracni_znacka ?>">
        <label>Rok výroby</label>
        <input type="text" name='rok_vyroby' class="form-control" value="<?php echo $a->rok_vyroby ?>">
        <label>Obsahu motoru</label>
        <input type="text" name='obsah_motoru' class="form-control" value="<?php echo $a->obsah_motoru ?>">
        <label>Převodovka</label>
        <input type="text" name='prevodovka' class="form-control" value="<?php echo $a->prevodovka ?>">
        </br>
        <button type="submit">Upravit</button>
    </div>
</form>
</div>