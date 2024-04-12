<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rezerwacja</title>
    <style>
             body {
    font-family: 'Helvetica Neue', Arial, sans-serif;
    background-color: #f6e6f9; /* Jasny fioletowy */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    max-width: 400px;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #4b0082; /* Ciemny fioletowy */
    margin-bottom: 20px;
}
        </style>

</head>
<body>

<?php
$conn=mysqli_connect('localhost','root','','warsztat') or die('Błąd');
mysqli_set_charset($conn,"utf8");
$query="SELECT wynajem_garaz.id, wynajem_garaz.miasto, wynajem_garaz.czas FROM wynajem_garaz;";
$result=mysqli_query($conn, $query);
?>


<?php
if(isset($_POST['imie'])&& isset($_POST['nazwisko'])&& isset($_POST['miasto']))
{
    $conn=mysqli_connect('localhost','root','','warsztat') or die ("błąd");
    mysqli_set_charset($conn,"utf8");
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $miasto=$_POST['miasto'];
    $garaż=$_POST['garaż'];
 
    $query2="INSERT klienci VALUES('','$imie','$nazwisko','$miasto',$garaż)";

    $result=mysqli_query($conn,$query2);
    echo $imie." ".$nazwisko." został dodany do wynajmowania";
}
else{
    echo 'wprowadz poprawne dane!!!';
}
mysqli_close($conn);
?>
<br>
<a href="index.php"> Wróć do menu </a><br>
</body>
</html>
============================================
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rezerwacja</title>
    <style>
             body {
    font-family: 'Helvetica Neue', Arial, sans-serif;
    background-color: #f6e6f9; /* Jasny fioletowy */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    max-width: 400px;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #4b0082; /* Ciemny fioletowy */
    margin-bottom: 20px;
}
        </style>

</head>
<body>

<?php
$conn=mysqli_connect('localhost','root','','warsztat') or die('Błąd');
mysqli_set_charset($conn,"utf8");
$query="SELECT wynajem_garaz.id, wynajem_garaz.miasto, wynajem_garaz.czas FROM wynajem_garaz;";
$result=mysqli_query($conn, $query);
?>


<?php
if(isset($_POST['imie'])&& isset($_POST['nazwisko'])&& isset($_POST['miasto']))
{
    $conn=mysqli_connect('localhost','root','','warsztat') or die ("błąd");
    mysqli_set_charset($conn,"utf8");
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $miasto=$_POST['miasto'];
    $garaż=$_POST['garaż'];
    $wynajmowany=$_POST['wynajmowany'];
 
    $query2="INSERT klienci VALUES('','$imie','$nazwisko','$miasto',$garaż, '$wynajmowany')";

    $result=mysqli_query($conn,$query2);
    echo $imie." ".$nazwisko." został dodany do wynajmowania";
}
else{
    echo 'wprowadz poprawne dane!!!';
}
mysqli_close($conn);
?>
<br>
<a href="index.php"> Wróć do menu </a><br>
</body>
</html>

