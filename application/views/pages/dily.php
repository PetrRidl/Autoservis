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
      <th scope="col">Název</th>
      <th scope="col">Cena za kus</th>
      <th scope="col">Množství na skladě</th>
      

    </tr>
  </thead>
  <tbody>
     <?php foreach($dily as $d): ?>
      <tr>
            <td>
              <?php echo $d['nazev'];?>       
            </td>
            <td> 
                <?php echo $d['cena']; ?>
            </td>
            <td> 
                <?php echo $d['sklad']; ?>
            </td>
            <td> 

    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>