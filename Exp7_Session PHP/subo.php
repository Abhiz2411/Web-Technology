<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Output</title>

    <style>
        h1
        {
            text-align:center;
            color:green;
            margin-top:25px;
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
        <h1>
            <b>
                <?php
                    session_start();

                    $_SESSION["fn"] = $_POST["fn"];
                    $_SESSION["sn"] = $_POST["sn"];

                    $result = $_SESSION["fn"] - $_SESSION["sn"];

                    echo $result;
                ?>
            </b>
        </h1>
        <br>
        <br>
        <br>
        <a href="logout.php"><input type="submit" name = "logout" value="Logout" class = "btn1"></a>
    </fieldset>
</body>
</html>