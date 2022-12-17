<!--Code written by Abhijit Zende-->

<!--Exp.4: Program based on PHP variables, Expression, arrays, control structure-->
<!--Problem Statement: Write program on Matrix addition web application.--> 
<!--Take input from user and display result in matrix format.-->

<!--Program for matrix addition of two matrices having input taken from user-->
<!--Matrix addition can only be done if both the matrix have same dimensions, i.e. M1(m*n)=M2(m*n)-->
<!--Where m = no. of rows and n = no. of cols-->

<!--Approach-->
<!--1. Take number of rows and cols of matrix as input using HTML form by using POST method and name attribute-->
<!--2. Take the values of the corresponding indices of matrix on next page for both matrix-->
<!--3. Initialize the matrices of given dimensions and values using $_REQUEST and $_SESSION-->
<!--4. Display both the matrices-->
<!--5. Add and display the resultant matrix-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrices dimensions input</title>
</head>
<body>
    <form action="op1.php" method = "post">
        <fieldset>                                                      <!--For creating the fieldset around the input-->
            <legend style="font-size:2vw;"><b>Input From</b></legend>   <!--Naming the fieldset-->
            <table width = "400px" cellspacing = "5">                   <!--Structured display of data-->
                    <tr>
                        <td>
                            <label for="nr">Number of Rows: </label>
                        </td>
                        <td>
                            <!--Matrix should have atleat 2 rows-->
                            <input type="number" name="nor" id="nr" required="" min="2" placeholder="Enter no. of rows" autofocus>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="nc">Number of Cols:  </label>
                        </td>
                        <td>
                            <input type="number" name="noc" id="nc" required="" min="2" placeholder="Enter no. of coloumns">
                        </td>
                    </tr>

                    <tr></tr>
                    <tr></tr>

                    <tr>
                        <td>
                            <input type="submit" value="submit">
                            <input type="reset" value="reset">
                        </td>
                    </tr>
            
            </table>
        </fieldset>
    </form>
</body>
</html>