<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test repo</title>
</head>

<body>
    <h1>hello world</h1>
    <nobr>
        <?php
        echo "text from php <br>";
        for ($i = 0; $i < 10; $i++) {
        ?>
            <h1><?= $i ?></h1>
        <?php
        }
        ?>
    </nobr>
</body>

</html>