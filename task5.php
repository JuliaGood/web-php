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
      
      <?php 
        $index = 0;
        foreach($workers as $name => $salary) {
        $font = "Times New Roman"; 
        if ($index == 0) {
          $font = "Arial";
        } else if ($index == 1) {
          $font = "Courier";
        } else if ($index == 2) {
          $font = "Tahoma";
        } else if ($index == 3) {
          $font = "Arial Black";
        }  else if ($index == 4) {
          $font = "Georgia";
        } 
        ?>
        <tr>
          <td style="font-family: <?php echo $font; ?>"> 
            <?php echo $name; ?>
          </td>
          <td> 
            <?php echo $salary; ?>
          </td>
        </tr>
      <?php 
        $index++;
      } ?>
        
    </table>
  </body>
</html>
