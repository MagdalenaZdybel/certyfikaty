<html>
    <head>
        <title>Dodanie danych do bazy</title>
    </head>
<body>
    <h1>Rezultaty po dodaniu</h1>
     
<?php

        $kurs=$_POST['nazwa_kursu'];
        $student =$_POST['dane_student'];
        $prowadzacy=$_POST['dane_prowadzacy'];
        $data=$_POST['data_kursu'];
        
        if (!$kurs || !$student || !$prowadzacy || !$data) {
            echo 'Wypełnij wszystkie pola. Wprowadź jeszcze raz';
            exit;
        }
        
        if (!get_magic_quotes_gpc()) {
            $kurs = addslashes($kurs);
            $student = addslashes($student);
            $prowadzacy = addslashes($prowadzacy);
            $data = addslashes($data);
        }
        
@ $conn = new mysqli("127.0.0.1", "root", "", "certificate");

    if (mysqli_connect_errno()) {
        echo 'Połączenie z bazą danych nie udało się. Klikaj jeszcze raz za chwilę';
        exit;
    }
    
    $zapytanie = "insert into kurs (nazwa_kursu , data) values ('".$kurs."' , '".$data."')";
    $wynik = $conn->query($zapytanie);
    if ($wynik)
        echo $conn->affected_rows. 'dane zapisane';
    
// '".$student."' , '".$prowadzacy."' , 
?>

</body>

</html>