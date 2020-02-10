<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="stylemijnlijn.css">
    <title>Document</title>
</head>
<body>
<img class="banner" src="bannerMijnLijn.jpg">
<div class="vertical-menu">
    <a href="homepaginamijnlijn.php">Home</a>
    <a href="afspraak.php" class="active">Afspraak Maken</a>
    <a href="info.php">Info Werkwijze</a>
    <a href="contact.php">Contact</a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h1>

    <form class="forum" method="post">
        <br>gebruikersnaam <br>
        <input type="text" name="naam">
        <br>email <br>
        <input type="text" name="verblijfid">
        <br>datum afspraak <br>
        <input type="date" name="leeftijd">

        <input type="submit" value="submit" name="btnopslaan">
    </form>
</h1>


<?php

$host = "localhost";
$dbname = "mijnlijn";
$user = "root";
$password = "";
try
{
    $con = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
}
catch(PDOException $ex) {
    echo "Verbinding mislukt: $ex";
}


if (isset($_POST['btnopslaan'])) {
    $cage = $_POST["naam"];
    $date = $_POST["leeftijd"];
    $verblijf = $_POST["verblijfid"];
    $query = "INSERT INTO afspraken VALUES (0,'$cage','$date','$verblijf')";
    $stm = $con->prepare($query);
    if($stm->execute()){
        echo "record toegevoegd";
    }
    else{
        echo "eror";
        var_dump($query);
    }


}
?>







<img class="bannercontact" src="bannerContact.jpg">

</body>
</html>
