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
<form method="post" action='<?php base_url();?>zapisZamestnanci'>
    <div class="form-group">
        <label>Jméno</label>
        <input type="text" name='jmeno' class="form-control">
        <label>Příjmení</label>
        <input type="text" name='prijmeni' class="form-control">
        
        </br>
        <button type="submit">Přidat nového zaměstnance</button>
    </div>
</form>
</div>