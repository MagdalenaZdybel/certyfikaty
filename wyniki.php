<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    
<body>
    <h1>Rezultat wyszukiwania:</h1>
    
    <?php

        $metoda_szukania=$_POST['metoda_szukania'];
        $wyrazenie=$_POST['wyrazenie'];
        
        $wyrazenie = trim($wyrazenie); //skrypt usuwa spacje,przypadkowe
        
        if (!$metoda_szukania || !$wyrazenie) {
            echo 'Brak wybranych parametrów szukania, spróbuj ponownie';
            exit;
        }
               
     $conn = new mysqli("127.0.0.1", "root", "", "certificate");
     

    if (mysqli_connect_errno()) {
        echo 'B³¹d! Spróbuj ponownie.';
        exit;
    }
    
    
$zapytanie = "select * from certificate where ".$metoda_szukania." like '%".$wyrazenie."%'"; 
$wynik = $conn->query($zapytanie);
    
$ile_znalezionych = $wynik->num_rows;
    
  echo '<p>Iloœæ znalezionych pozycji: ' .$ile_znalezionych. '</p>';
    
 for ($i=0; $i <$ile_znalezionych; $i++) {
       
       $wiersz = $wynik->fetch_assoc();
       echo '<p>' . ($i+1) . '. kurs: ';
       echo '<br />prowadzacy: ';
       echo '<br />student: ';
       echo '</p>';
  }
 $wynik->free();
$db->close();
   // 
       $zapytanie = "select * from kurs;";
     
        $wynik = $conn->query($zapytanie);
     
        $ile_znalezionych = $wynik->num_rows;
         
       echo '<p>IloÅ›Ä‡ znalezionych pozycji: ' . $ile_znalezionych. '</p>';
            
       for ($i=0; $i <$ile_znalezionych; $i++) {
         $wiersz = $wynik->fetch_assoc();
         var_dump($wiersz);
       }
    ?>

</body>

        </html>
