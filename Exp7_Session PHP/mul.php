<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .btn1
        {
            text-align:center;
            background:green;
            color:white;
            height:35px;
            width:100px;
            font-size:18px;
            border:0;
            border-radius:5px;
            cursor:pointer;
        }

    </style>
    <title>Multiplication</title>
</head>
<body>
    <fieldset>
        <legend style="size:2vw">Input elements</legend>
        <form action="mulo.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="fn">First no.:</label>
                    </td>
                    <td>
                        <input type="number" name="fn" id="fn" required="" placeholder="Enter first number" autofocus>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="sn">Second no.:</label>
                    </td>
                    <td>
                        <input type="number" name="sn" id="sn" required="" placeholder="Enter second number">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="submit">
                        <input type="reset" value="reset">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>