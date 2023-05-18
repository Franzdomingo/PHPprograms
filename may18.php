<!DOCTYPE html>

<HTML>
    <BODY>
        <?php
       
        //Predefined Functions: Array
            $colors = array("Red", "Green", "Blue");

            echo "<br>Array Size: ".count($colors);

            array_push($colors, "Black", "White");

            echo "<br>Array Size: ".count($colors);

            array_pop($colors);
           
       
            //$reverse_array = array_reverse($colors);
            var_dump($colors);

            echo "<br>Colors: ";
            foreach(array_reverse($colors) as $color){
                echo "$color, ";
            }

            $grades = array(80,90.5,"100", "One");
           
            echo "<br>Grades:";
            rsort($grades);
            var_dump($grades);
            echo "<br>Summation of Grades:".array_sum($grades);
            echo "<br> Average: ".(array_sum($grades)/count($grades));

        ?>
    </BODY>
</HTML>