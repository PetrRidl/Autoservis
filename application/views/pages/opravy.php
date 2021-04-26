<style>
.obsah{
    float: center;
    width: 98%;
    height: 85%;
    
}

</style>
<div class="container obsah">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Vyměňovaný díl</th>
      <th scope="col">Cena opravy</th>
      <th scope="col">Přidělený zaměstnanec</th>
      
      

    </tr>
  </thead>
  <tbody>
     <?php foreach($oprava as $o): ?>
      <tr>
            <td>
              <?php echo $o->nazev;?>       
            </td>
            <td> 
                <?php echo $o->cena; ?>kč
            </td>
            <td>
                <?php echo $o->jmeno;?> <?php echo $o->prijmeni;?>
            </td>

            <td> 

    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>