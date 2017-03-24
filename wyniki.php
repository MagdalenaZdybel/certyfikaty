<html>
    <head>
    <tite>Wyniki wyszukiwania:</title>
</head>
<body>
    <h1>Wyniki wyszukiwania</h1>
    
    
    <?php

        $metoda_szukania=$_POST['metoda_szukania'];
        $wyrazenie=$_POST['wyrazenie'];
        
        $wyrazenie = trim($wyrazenie);
        
        if (!$metoda_szukania || !$wyrazenie) {
            echo 'Brak parametrów szukania';
            exit;
        }
        
     $conn = new mysqli("127.0.0.1", "root", "", "certificate");

    if (mysqli_connect_errno()) {
        echo 'Błąd! Spróbuj ponownie.';
        exit;
    }
    
 //   $zapytanie = "select * from kurs"; 
 //   $wynik = $conn->query($zapytanie);
    
 //   $ile_znalezionych = $wynik->num_rows;
    
 //   echo '<p>Ilość znalezionych pozycji: ' .$ile_znalezionych. '</p>';
    
 //   for ($i=0; $i <$ile_znalezionych; $i++) {
       
 //       $wiersz = $wynik->fetch_assoc();
 //       echo '<p>' . ($i+1) . '. kurs: ';
 //       echo '<br />prowadzacy: ';
 //       echo '<br />student: ';
 //       echo '</p>';
  //  }
  //  $wynik->free();
  //  $db->close();
    
 //       $zapytanie = "select * from kurs;";
        
//        $wynik = $conn->query($zapytanie);
        
//        $ile_znalezionych = $wynik->num_rows;
            
 //       echo '<p>Ilość znalezionych pozycji: ' . $ile_znalezionych. '</p>';
            
 //       for ($i=0; $i <$ile_znalezionych; $i++) {
 //           $wiersz = $wynik->fetch_assoc();
   //         var_dump($wiersz);
 //       }
    ?>

</body>


