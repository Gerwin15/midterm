<!DOCTYPE html>

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weight Converter</title>

</head>

    <style>
        body {background-color: #F7DCB9}
        h1 {text-align: center;}
        h1 {font-family: Verdana}
        p {text-align: center;}
        p {font-family: Verdana}
        form  {text-align: center;}
        label {text-align: center;}
        label {font-family: Verdana}
        input {font-family: Verdana}
    </style>

<body>
    <h1>Weight Converter</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="kg">Enter weight in kilograms (kg):</label>
        <input type="number" id="kg" name="kg" step="any" required>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kg = $_POST["kg"];
        $mg = $kg * 1000000;
        echo "<p>$kg kilograms is equal to $mg milligrams </p>";
    }
    ?>
    <p><a href="index.php">Back to Home</a></p>
</body>
</html>