<style>
.obsah{
    float: center;
    width: 98%;
    height: 85%;
   
}
a{
  color: #dc3545;
}
a:hover{
    color: #dc3545;
}
</style>
<div class="container obsah">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Jméno</th>
      <th scope="col">Příjmení</th>
      <th scope="col">Email</th>
      <th scope="col">Telefon</th>
      <th scope="col">Adresa</th>
      <th scope="col">Úprava</th>

      
    </tr>
  </thead>
  <tbody>
     <?php foreach($trouba as $zakaznik): ?>
      <tr>
            <td>
              <?php echo $zakaznik->jmeno;?>       
            </td>
            <td> 
                <?php echo $zakaznik->prijmeni; ?>
            </td>
            <td> 
                <?php echo $zakaznik->email; ?>
            </td>
            <td> 
                <?php echo $zakaznik->telefon; ?>
            </td>
            <td> 
                <?php echo $zakaznik->adresa; ?>
            </td>
            <td>
                <a href="<?php echo base_url()?>/HlavniStrana/upravaZakaznika/<?php echo $zakaznik->idmajitele?>"> Upravit</a>
            </td>

          
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>