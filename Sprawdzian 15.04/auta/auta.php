<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 if(isset($_POST['marka']) && isset($_POST['model'] ) && isset($_POST['rok']) && isset($_POST['mail'] ))
 $marka = $_POST['marka'];
$model = $_POST['model'];
$rok = $_POST['rok'];
$mail = $_POST['mail'];

$wiek=2024-$rok;
if($wiek>20)
{
    echo "Niestety, Twój pojazd nie spełnia warunków udziału w naszym programie";

}
else
{
    echo "Dziękujemy za zapisanie się do naszej usługi. Informacje zostaną wysłane na podany adres email";

}
   




    ?>
</body>
</html>