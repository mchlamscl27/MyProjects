<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI FORMULA</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <h1>BMI</h1>
    <?php 
    $name = "Masocol, Micha Ela M.";
    $age = 20;
    $address = "Caingin St. Tinajeros Malabon City";
    $contactNum = "09854988227";
    $birthdate = "March 27, 2003";
    $gender = "Female";
    $bloodtype = "B";

    $metricWeight = 44;
    $metricHeight = 1.49;

    $imperialHeight = 58.6614;
    $imperialHeight = 97.0034;

    $metricBMI = $metricWeight / $metricHeight * $metricHeight;

    $imperialBMI = 703 * $imperialWeight / ($imperialHeight * $imperialHeight);

    ?>

    <div class="body">
        <div class="information">
            <h2>MY INFORMATION</h2>
            <p>NAME: <?php echo"$name"?> </p>
            <p>AGE: <?php echo"$age"?></p>
            <p>ADDRESS: <?php echo"$address"?></p>
            <p>CONTACT NUMBER: <?php echo"$contactNum"?></p>
            <p>BIRTHDATE: <?php echo"$birthdate"?></p>
            <p>GENDER: <?php echo"$gender"?></p>
            <p>BLOODTYPE: <?php echo"$bloodtype"?></p>

            <h2 class="metric">METRIC</h2>
                <p class="metric">BMI = <?php echo "$metricBMI" ?></p>
            <h2 class="imperial">IMPERIAL</h2>
                <p class="imperial">BMI = <?php echo "$imperialBMI" ?></p>

        </div>
    </div>
</body>
</html>