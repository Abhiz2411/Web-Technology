<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <style>
        .btn
        {
            background:blue;
            color:white;
            height:35px;
            width:100px;
            font-size:18px;
            border:0;
            border-radius:5px;
            cursor:pointer;
        }

        .btn1
        {
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
</head>
<body>
    <fieldset>
        <legend><b>Mathematical Operations</b></legend>
            <table width = "100%">
                <tr>
                    <td>
                        <a href="add.php"><input type="submit" name = "Add" value="add" class = "btn"></a>
                    </td>

                    <td>
                        <a href="sub.php"><input type="submit" name = "Sub" value="substract" class = "btn"></a>
                    </td>

                    <td>
                        <a href="mul.php"><input type="submit" name = "Mul" value="multiply" class = "btn"></a>
                    </td>

                    <td>
                        <a href="div.php"><input type="submit" name = "Div" value="Divide" class = "btn"></a>
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="logout.php"><input type="submit" name = "logout" value="Logout" class = "btn1"></a>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
    </fieldset>
</body>
</html>