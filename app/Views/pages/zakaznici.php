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
      <th scope="col">Jméno</th>
      <th scope="col">Příjmení</th>
      <th scope="col">Email</th>
      <th scope="col">Telefon</th>
      <th scope="col">Adresa</th>
      
    </tr>
  </thead>
  <tbody>
     <?php foreach($zakaznik as $z): ?>
      <tr>
            <td>
              <?php echo $z['jmeno'];?>       
            </td>
            <td> 
                <?php echo $z['prijmeni']; ?>
            </td>
            <td> 
                <?php echo $z['email']; ?>
            </td>
            <td> 
                <?php echo $z['telefon']; ?>
            </td>
            <td> 
                <?php echo $z['adresa']; ?>
            </td>
          
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>