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
<form method="post" action='<?php echo base_url();?>/HlavniStrana/zapisObjednavky'>
    <div class="form-group">
        <label>Výrobce vozu</label>
        <input type="text" name='vyrobce' class="form-control">
        <label>Typ vozu</label>
        <input type="text" name='typ_vozu' class="form-control">
        <label>Registrační značka</label>
        <input type="text" name='registracni_znacka' class="form-control">
        <label>Rok výroby</label>
        <input type="text" name='rok_vyroby' class="form-control">
        <label>Obsahu motoru</label>
        <input type="text" name='obsah_motoru' class="form-control">
        <label>Převodovka</label>
        <input type="text" name='prevodovka' class="form-control">
        </br>
        <button type="submit">Přidat</button>
    </div>
</form>
</div>