<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potwierdzenie zamówienia</title>
</head>
<body>
<?php
    $baza=@mysqli_connect("localhost","root","","hasbulla");
    if(isset($_POST["wyslij"])){
        $imie=$_POST["imie"];
        $nazwisko=$_POST["nazwisko"];
        $tel=$_POST["tele"];
        $rodzaj=$_POST["sprawa"];
        $prob=$_POST["problem"];
        $innyprob=$_POST["innyProblem"];
        $gwar=$_POST["gwarancja"];
        $producent=$_POST["firma"];
        $innyprod=$_POST["firmaDod"];
        $model=$_POST["model"];

        $query="INSERT INTO zamowienia(imie,nazwisko,tel,sprawa,gwarancja,problem) VALUES ('$imie','$nazwisko','$tel','$rodzaj','$gwar',";
        if($rodzaj=="Komputer Stacjonarny"){

            switch ($_POST["problem"]){
                case 40:{
                    $query.="'Brak dźwięku')";
                }
                break;
                case 50:{
                    $query.="'Powolne działanie')";
                }
                break;
                case 60:{
                    $query.="'Brak obrazu')";
                }
                break;
                case 70:{
                    $query.="'Wirus')";
                }
                break;
                case 80:{
                    $query.="'Komputer zawiesza się')";
                }
                break;
                case 90:{
                    $query.="'Blue Screen')";
                }
                break;
                case 100:{
                    $query.="'Aktualizacja Windows')";
                }
                break;
                case 150:{
                    $query.="'$innyprob')";
                }
                break;
            }

            
        }
        if($rodzaj=="Laptop"){
            if($producent=="Inny"){
                $query="INSERT INTO zamowienia(imie,nazwisko,tel,sprawa,gwarancja,producent_laptopa,model,problem) VALUES ('$imie','$nazwisko','$tel','$rodzaj','$gwar','$innyprod','$model',";
            }
            else{
                $query="INSERT INTO zamowienia(imie,nazwisko,tel,sprawa,gwarancja,producent_laptopa,model,problem) VALUES ('$imie','$nazwisko','$tel','$rodzaj','$gwar','$producent','$model',";
            }
            
            switch ($_POST["problem"]){
                case 40:{
                    $query.="'Brak dźwięku')";
                }
                break;
                case 50:{
                    $query.="'Powolne działanie')";
                }
                break;
                case 70:{
                    $query.="'Wirus')";
                }
                break;
                case 80:{
                    $query.="'Laptop zawiesza się')";
                }
                break;
                case 90:{
                    $query.="'Blue Screen')";
                }
                break;
                case 100:{
                    $query.="'Aktualizacja Windows')";
                }
                break;
                case 150:{
                    $query.="'$innyprob')";
                }
                break;
                case 200:{
                    $query.="'Zepusty ekran')";
                }
                case 300:{
                    $query.="'Zalany laptop')";
                }
            }

            
        }
        if($rodzaj=="Inne Urządzenie"){
            $query="INSERT INTO zamowienia(imie,nazwisko,tel,sprawa,gwarancja,problem) VALUES ('$imie','$nazwisko','$tel','$rodzaj','$gwar','$innyprob')";
        }

        if(mysqli_query($baza, $query)){
            echo "<h2 style=\"text-align: center;\">".'Złożono zamówienie!'."</h2>";
            echo "<div style=\"background-image:url('../img/happy.jpg');width: 100%; height: 100vw; background-size:cover;\"></div>";
            header("refresh:2; url=../index.php");
        }
        else{
            echo "<h2 style=\"text-align: center;\">".'Wystapił problem!'."</h2>";
            echo "<div style=\"background-image:url('../img/mad.jpg');width: 100%; height: 100vw; background-size:cover;\"></div>";
            header("refresh:2; url=../index.php");
        }
        mysqli_close($baza);
    }
?>
</body>
</html>

