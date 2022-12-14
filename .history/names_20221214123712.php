<?php
$name = ['james', 'anish', 'akhil'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     .some-name {
       
     }
</head>
<body class="">
    <h1>Names</h1>
    <ul class="<?= count($name)>3 ? "more-name": "some-name"?>
    if()
        <?php foreach ($name as $name) { ?>
            <li><?= $name ?></li>
        <?php } ?>
    </ul>

</body>

</html>