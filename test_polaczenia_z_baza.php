<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
    </head>
   
    <header>
    <a href="formularz.html"></a>
    </header>
        <title>Dtest polaczenia</title>
    </head>
    <body>

        <?php
            $metoda_szukania=INPUT_GET['metoda_szukania'];
            $wyrazenie=INPUT_COOKIE['wyrazenie'];
            $kurs_id = $_GET['rekord'];
         //   $wyrazenie=trin($wyrazenie);
            
@     $conn = new mysqli("127.0.0.1", "root", "", "certificate");

            
       if (mysqli_connect_errno()) {
            echo 'Po³¹czenie z baz¹ danych nie uda³o siê. Klikaj jeszcze raz za chwilê';
            exit;
        }
        
       // $conn->select_db($certificate); - wybór bazy
        
//     $pytanie = "select * from kurs"; 
     $pytanie = "SELECT cks.idkurs, s.imie as imie_kursant, s.nazwisko as nazwisko_kursant, k.nazwa_kursu, k.data, p.imie as prowadzacy_imie, p.nazwisko as prowadzacy_nazwisko 
FROM 
certificate.kurs_student as cks
left join student as s ON s.idstudent = cks.student_idstudent
left join kurs as k ON k.idkurs = cks.kurs_idkurs
left join kurs_prowadzacy as kp ON kp.idkurs = cks.kurs_idkurs
LEFT JOIN prowadzacy as p ON p.idprowadzacy = kp.prowadzacy_idprowadzacy

WHERE cks.idkurs = " . $kurs_id; 
     
     $wynik = mysqli_query($conn, $pytanie);
     
//     echo "dupa";
     
  if(mysqli_num_rows($wynik) > 0) { 
      //print_r("test 1 ");
      
      while($r = mysqli_fetch_assoc($wynik)) { 
      echo '<br>'.$r['imie_kursant'];
      echo '<br>'.$r['nazwisko_kursant'];
      echo '<br>'.$r['nazwa_kursu'];
      echo '<br>'.$r['data'];
      echo '<br>'.$r['prowadzacy_imie'];
      echo '<br>'.$r['prowadzacy_nazwisko'];
      echo '<br>';
      
      //while($r = mysqli_fetch_assoc($wynik)) { print_r("test "); 
      //echo '<td>'.$r['']; 
      //echo 'student: ';
      //echo stripslashes($pytanie['student']);
      
      }
      
  }
  
     $pytanie = "select * from student"; 
     
     $wynik = mysqli_query($conn, $pytanie);
     
     print '<br>Nazwisko i imiê studenta: <br>';
     if(mysqli_num_rows($wynik) > 0) { 
         while($r = mysqli_fetch_assoc($wynik)) { 
            // echo '<br> Nazwisko i imiê studenta:';
      echo '<td>'.$r['nazwisko'].$r['imie'];
      echo '<br>';
     }
     }
     $pytanie = "select * from prowadzacy"; 
     
     $wynik = mysqli_query($conn, $pytanie);
     
     print '<br>Nazwisko i imiê prowadz¹cego: <br>';
     if(mysqli_num_rows($wynik) > 0) { 
         while($r = mysqli_fetch_assoc($wynik)) { 
            // echo '<br> Nazwisko i imiê studenta:';
      echo '<td>'.$r['nazwisko'].$r['imie'];
      echo '<br>';
     }
     }
     
          
     
    /* je¿eli wynik jest pozytywny, to wyœwietlamy dane */ 
  //  echo "<table cellpadding=\"2\" border=1>"; 
  
   /*   echo "<tr>"; 
        echo "<td>".$r['imie']."</td>"; 
        echo "<td>".$r['email']."</td>"; 
        echo "<td> 
       <a href=\"index.php?a=del&amp;id={$r['id']}\">DEL</a> 
       <a href=\"index.php?a=edit&amp;id={$r['id']}\">EDIT</a> 
       </td>"; 
        echo "</tr>"; 
    } 
    echo "</table>"; 
} */
?>
    </body>
</html>