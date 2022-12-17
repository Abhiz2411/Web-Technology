<!--We use $_REQUEST to access values based on unique values of name attribute-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Matrix</title>
</head>
<body>
    <fieldset>
        <legend style="font-size:2vw;"><b>Matrix addition</b></legend>
        <?php
            session_start();

            //Declaring the matrices
            $matrix1 = array();
            $matrix2 = array();

            //For saving user input into matrix1
            for($i=0;$i<$_SESSION["rows"];$i++)
            {
                for($j=0;$j<$_SESSION["cols"];$j++)
                {
                    $matrix1[$i][$j] = $_REQUEST["m1$i$j"];
                }
            }

            //For saving user input into matrix2
            for($x=0;$x<$_SESSION["rows"];$x++)
            {
                for($y=0;$y<$_SESSION["cols"];$y++)
                {
                    $matrix2[$x][$y] = $_REQUEST["m2$x$y"];
                }
            }

            //For displaying the saved Matrix1
            echo "Matrix 1:";
            echo "<br>";

            for($i=0;$i<$_SESSION["rows"];$i++)
            {
                for($j=0;$j<$_SESSION["cols"];$j++)
                {
                    echo $matrix1[$i][$j];
                    echo " ";
                }
                echo "<br>";
            }
            
            echo "<br>";
            //For displaying the saved Matrix2
            echo "Matrix 2:";
            echo "<br>";

            for($x=0;$x<$_SESSION["rows"];$x++)
            {
                for($y=0;$y<$_SESSION["cols"];$y++)
                {
                    echo $matrix2[$x][$y];
                    echo " ";
                }
                echo "<br>";
            }

            $sum = array();             //Array containing sum of matrices

            //For actual addition of matrices
            for($i=0;$i<$_SESSION["rows"];$i++)
            {
                for($j=0;$j<$_SESSION["cols"];$j++)
                {
                    $sum[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
                }
            }

            echo "<br>";
            echo "Matrix Addition:";
            echo "<br>";

            //For displaying the addition of matrices
            for($x=0;$x<$_SESSION["rows"];$x++)
            {
                for($y=0;$y<$_SESSION["cols"];$y++)
                {
                    echo $sum[$x][$y];
                    echo " ";
                }
                echo "<br>";
            }
        ?>
    </fieldset>
</body>
</html>