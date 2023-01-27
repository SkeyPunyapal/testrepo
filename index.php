<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test repo</title>
</head>

<body>
    <h1>hello world!</h1>
    <nobr>
        <?php
        echo "text from php <br> <h1>";
        foreach (range(1, 10) as $value) {
            echo "$value,";
        }
        echo '</h1>';
        ?>
    </nobr>
</body>

</html>