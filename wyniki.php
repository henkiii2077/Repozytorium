<?php
$connect = mysqli_connect("localhost", "root", "", "laboratorium");
?>

<?php
session_start();
if (isset($_SESSION["login"])) {
    echo "witaj".$_SESSION["login"];
} else {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <tr>
            <th>Imie pacjenta</th>
            <th>Nazwisko pacjenta</th>
            <th>Pesel</th>
            <th>data zlecenia</th>
            <th>data wykonania</th>
            <th>wynik</th>
        </tr>
    

    <?php
    $zapytanie = "SELECT imie, nazwisko, pesel, Zlecenie.data, Wynik.data, plik FROM Pacjent JOIN Zlecenie ON Zlecenie.idPacjenta = Pacjent.id LEFT JOIN Wynik ON Zlecenie.id = Wynik.idZlecenia;";
    $result = mysqli_query($connect, $zapytanie);
    while ($wiersz = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>$wiersz[0]</td>";
        echo "<td>$wiersz[1]</td>";
        echo "<td>$wiersz[2]</td>";
        echo "<td>$wiersz[3]</td>";
        echo "<td>$wiersz[4]</td>";
        echo "<td><a href='$wiersz[5]'>wyniki</a></td>";
        echo "</tr>";
    };

    ?>
    </table>

    <?php
    mysqli_close($connect);
    ?>
    
</body>
</html>