<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    $happy = array('dayeon','byeongkuk','zzanga','mimi');
    echo $happy[2].'<br>';
    var_dump(count($happy));
    array_push($happy,'myamya','moo');
    var_dump($happy);
    ?>
    
</body>
</html>