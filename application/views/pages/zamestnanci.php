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
      <th scope="col">Osobní číslo</th>
      <th scope="col">Úprava</th>
      <th scope="col">Smazat</th>
      

    </tr>
  </thead>
  <tbody>
     <?php foreach($zamestnanci as $z): ?>
      <tr>
            <td>
              <?php echo $z->jmeno;?>       
            </td>
            <td> 
                <?php echo $z->prijmeni; ?>
            </td>
            <td> 
                <?php echo $z->osobnicislo; ?>
            </td>
            <td> 
                <a href="<?php echo base_url()?>/HlavniStrana/upravaZamestnance/<?php echo $z->osobnicislo;?>">Upravit</a>
            </td>
            <td> 
                <a href="<?php echo base_url()?>/HlavniStrana/smazatZamestnance/<?php echo $z->osobnicislo;?>">Smazat</a>
            </td>
            <td> 

    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>