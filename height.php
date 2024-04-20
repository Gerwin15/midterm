<!DOCTYPE html>

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Height Converter</title>

</head>

    <style>
        body {background-color: #F7DCB9}
        h1 {text-align: center;
            font-family: Verdana
        }
        p {text-align: center;
           font-family: Verdana
        }
        form  {text-align: center;}
        label {text-align: center;
               font-family: Verdana
            }
        input {font-family: Verdana}
        img {display: block;
             margin-left: auto;
             margin-right: auto;
             border:1px solid black
            }
    </style>

<body>
<img src="height.gif" alt="height icon" width="150" height="150" class ="center">
    <h1>Height Converter</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="km">Enter height in kilometers (km):</label>
        <input type="number" id="km" name="km" step="any" required>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $km = $_POST["km"];
        $m = $km * 1000;
        echo "<p>$km kilometers is equal to $m meters.</p>";
    }
    ?>

    <p><a href="index.php">Back to Home</a></p>
</body>
</html>
