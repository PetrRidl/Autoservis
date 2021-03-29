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
      <th scope="col">Osobní číslo</th>
      

    </tr>
  </thead>
  <tbody>
     <?php foreach($zamestnanci as $z): ?>
      <tr>
            <td>
              <?php echo $z['jmeno'];?>       
            </td>
            <td> 
                <?php echo $z['prijmeni']; ?>
            </td>
            <td> 
                <?php echo $z['osobnicislo']; ?>
            </td>
            <td> 

    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>