<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $largura = $_GET['largura'];
     $comprimento = $_GET['comprimento'];
     $area = ($largura * $comprimento);
     echo "Area: " . $area
    ?>
</body>
</html>