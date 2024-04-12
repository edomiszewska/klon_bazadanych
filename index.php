<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
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



form input[type="text"],
form select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

form input[type="submit"],
form input[type="reset"] {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: rgba(75, 0, 130, 0.8); /* Polprzezroczysty fioletowy */
    color: #fff;
}

form input[type="submit"]:hover,
form input[type="reset"]:hover {
    background-color: rgba(75, 0, 130, 1); /* Przy najechaniu kursora zmiana na bardziej widoczny kolor */
}

    </style>
</head>
<body>
    <!-- <?php
$conn=mysqli_connect('localhost','root','','warsztat') or die ("Błąd! ");
mysqli_set_charset($conn,"utf8");
$query = "SELECT wynajem_garaz.miasto FROM wynajem_garaz;";
$result=mysqli_query($conn,$query);
$query2="SELECT wynajem_garaz.miasto FROM wynajem_garaz;";
$result2=mysqli_query($conn,$query2);
echo "Podróżujemy do: ";
echo'<ul>';

while($row=mysqli_fetch_row($result))
{
    echo '<li>'.$row[0].'</li>';
}
echo '</ul>';
mysqli_close($conn);
?> -->


<form action="rezerwacja.php" method="post">
Imie <input type="text" name='imie'><br>
Nazwisko <input type="text" name='nazwisko'><br>
Miasto <input type="text" name='miasto'><br>


<?php
$conn=mysqli_connect('localhost','root','','warsztat') or die('Błąd');
mysqli_set_charset($conn,"utf8");
$query="SELECT wynajem_garaz.id, wynajem_garaz.miasto, wynajem_garaz.czas FROM wynajem_garaz;";
$result=mysqli_query($conn, $query);
echo "Gdzie znajduje sie garaż:";
echo '<select name="garaż">';
while($row=mysqli_fetch_row($result)){
    echo '<option value="'.$row[0].'">'.$row[1].", ".$row[2]. '</option>';
}
echo '</select>';




$query2="SELECT garaze.id, garaze.czy_dyspozycyjne, garaze.garaż from garaze";
$result2=mysqli_query($conn, $query2);
echo "Numer garażu: ";
echo '<select name="wynajem">';
while($row=mysqli_fetch_row($result2)){
    echo '<option value="'.$row[0].'">'.$row[2]. '</option>';
}
echo '</select>';

mysqli_close($conn);
?>
<input type="reset" value="wyczyść">
<input type="submit" value="wynajmij garaz">

</form>


</body>
</html>
