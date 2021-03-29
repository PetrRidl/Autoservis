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
      <th scope="col">Výrobce</th>
      <th scope="col">Registrační značka</th>
      <th scope="col">Typ vozu</th>
      <th scope="col">Rok Výroby</th>
      <th scope="col">Obsah Motoru</th>
      <th scope="col">Převodovka</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach($auta as $a): ?>
      <tr>
            <td>
              <?php echo $a['vyrobce'];?>       
            </td>
            <td> 
                <?php echo $a['registracni_znacka']; ?>
            </td>
            <td> 
                <?php echo $a['typ_vozu']; ?>
            </td>
            <td> 
                <?php echo $a['rok_vyroby']; ?>
            </td>
            <td> 
                <?php echo $a['obsah_motoru']; ?>
            </td>
            <td> 
                <?php echo $a['prevodovka']; ?>
            </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>