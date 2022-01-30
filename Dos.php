<html>
    <head></head>

<body>
  <table  border="1px" style="width:50%; text-align:center">
    <?php

        $tabla = rand(1,10);
        $n = 0;

              echo "Tabla del " . $tabla . "<br>";

        while($n <=10){
             echo "<tr>";
             echo "<td>" . $tabla . " X " . $n . " = </td>";
             echo "<td>" . $tabla * $n . "</td>"; 
             echo "</tr>";
            $n++;
 
        }

    ?>
    </table>
</body>
</html>