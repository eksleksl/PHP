<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>function</title>
</head>
<body>
    <h1>function</h1>
    <h2>Basic</h2>
    <?php
        function basic(){
            print("lorem ipsum dolor1<br>");
            print("lorem ipsum dolor2<br>");
        }

        basic();
        basic();
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
        function sum($left,$right){
            print($left+$right);
            print("<br>");
        }
        sum(2,4);
        sum(4,6);
    ?>
    <h2>return</h1>
    <?php
        function sum2($left,$right){
            return $left+$right;
        }
    print(sum2(2,4));
    ?>
</body>
</html>