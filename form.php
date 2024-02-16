<?php
$paragraph=$_GET['paragraph'];
$badwords=$_GET['badwords'];
$trimparagraph=trim($paragraph);
$newparagraph= str_replace($badwords,'***',$trimparagraph);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= $paragraph ?></p>
    <p><?= strlen($trimparagraph)?></p>
    <p><?= $newparagraph?></p>
    <p><?=strlen($newparagraph) ?></p>
</body>
</html>