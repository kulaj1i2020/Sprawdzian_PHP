<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=0;
    $b=0;
    $c=0;

    $a=$_POST["a"];
    $b=$_POST["b"];
    $c=$_POST["c"];

    if($a>=$b+$c)
    {
        echo "Nie da się utworzyć takiego trójkąta";

    }
    else if($b>=$a+$c)
    {
        echo "Nie da się utworzyć takiego trójkąta";

    }
    else if($c>=$b+$a)
    {
        echo "Nie da się utworzyć takiego trójkąta";

    }
    else
    {
        echo "Można utworzyć taki trójkąt";
    }
    
    
    
    ?>
</body>
</html>