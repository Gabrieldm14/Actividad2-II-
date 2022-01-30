<html>
    <head></head>

<body>

    <?php

        $dado1 = rand(2,10);
        $sumaTotal = 0;

        echo "Son " . $dado1 . " dados<br> <br/>";
        
        for($x= 1; $x <=$dado1;$x++){ 

            $dado = rand(1,6);
             
            switch($dado){

                case 1:
                   echo "<img src='Dice-1-b.svg' width=100px>";
                break;

                case 2:
                   echo "<img src='Dice-2-b.svg' width=100px>";
                break;

                case 3:
                   echo "<img src='Dice-3-b.svg' width=100px>";
                 break;

                case 4:
                   echo "<img src='Dice-4-b.svg' width=100px>";
                break;

                case 5:
                    echo "<img src='Dice-5-b.svg' width=100px>";
                break;

                case 6:
                    echo "<img src='Dice-6-b.svg' width=100px>";
                 break;
            }

            $sumaTotal += $dado;
        }

        echo "<br/><br/> La suma de ellos: " . $sumaTotal . ".";
    ?>

</body>
</html>