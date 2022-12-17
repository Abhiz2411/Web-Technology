<!--Note: POST method and name attribute is used access user input values in php from html form-->
<!--$_SESSION is used to store values globally which is used to access values across pages-->
<!--In $_SESSION we store dimensions of matrices i.e. no. of rows and cols.-->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrices values input</title>
 </head>
 <body>
    <form action="op2.php" method = "post">
        <fieldset>
            <legend><b>Input Matrices values</b></legend>
            <?php
                session_start();

                //To store values of dimensions globally
                $_SESSION["rows"] = $_POST["nor"];
                $_SESSION["cols"] = $_POST["noc"];

                echo "<b>Matrix 1: </b>";
                echo "<br>";

                //For taking user input values
                for($i=0;$i<$_SESSION["rows"];$i++)
                {
                    for($j=0;$j<$_SESSION["cols"];$j++)
                    {
                        echo "Matrix1[$i][$j]: <input type = 'number' name = 'm1$i$j' required=''>";
                        echo "<br>";
                    }
                }
                
                echo "<br>";

                echo "<b>Matrix 2: </b>";
                echo "<br>";
                for($x=0;$x<$_SESSION["rows"];$x++)
                {
                    for($y=0;$y<$_SESSION["cols"];$y++)
                    {
                        echo "Matrix2[$x][$y]: <input type = 'number' name = 'm2$x$y' required=''>";
                        echo "<br>";
                    }
                }
    
            ?>

            <br>

        <input type="submit" value="submit">
        <input type="reset" value="reset">
        </fieldset>
    </form>   
 </body>
 </html>
 
 
