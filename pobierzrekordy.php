<html>
    <head>
    <tite>Wyniki wyszukiwania:</title>
</head>
<body>
    <h1>Wyniki wyszukiwania</h1>
    <?php

    $conn = new mysqli("127.0.0.1", "root", "", "certificate");

    if (mysqli_connect_errno()) {
        echo 'Błąd!';
        exit;
    }
        
        $zapytanie = "select * from kurs;";
        
        $wynik = $conn->query($zapytanie);
        
        $ile_znalezionych = $wynik->num_rows;
            
        echo '<p>Ilość znalezionych pozycji: ' . $ile_znalezionych. '</p>';
            
        for ($i=0; $i <$ile_znalezionych; $i++) {
            $wiersz = $wynik->fetch_assoc();
            var_dump($wiersz);
        }
    ?>

</body>


