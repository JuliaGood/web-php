<?php
  $workers = [
    "Ivanov" => "500$", 
    "Stepanov" => "600$", 
    "Petrov" => "700$", 
    "Godkov" => "800$", 
    "Semenov" => "900$", 
  ];
?>

<style>
  table, th, td {
    border: 1px solid gray;
    border-collapse: collapse;
  }
  th, td {
    padding: 5px 10px;
  }
</style>

<html>
  <body>
    <table>
      <tr>
        <th>Name</th>
        <th>Salary</th>
      </tr>

      <?php foreach($workers as $name => $salary) { ?>
        <tr>
          <td> 
            <?php echo $name ?>
          </td>
          <td> 
            <?php echo $salary ?>
          </td>
        </tr>
      <?php } ?>
        
    </table>
  </body>
</html>
