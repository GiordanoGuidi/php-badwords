<?php
$paragraph=$_GET['paragraph'];
$badwords=$_GET['badwords'];
//PARAGRPH WITH TRIM
$trimmed_paragraph=trim($paragraph);
//PARAGRAPH WITH REPLACED WORD
$new_paragraph= str_replace($badwords,'***',$trimmed_paragraph);
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
    <p><?= strlen($trimmed_paragraph)?></p>
    <p><?= $new_paragraph?></p>
    <p><?=strlen($new_paragraph) ?></p>
</body>
</html>