<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
    </head>
   
    <header>
    <a href="formularz.html"></a>
    </header>
        <title>Dodanie danych do bazy</title>
    </head>
    <body>
        <h1>Rezultaty po dodaniu</h1>

        <?php
        
    @     $conn = new mysqli("127.0.0.1", "root", "", "certificate");

        if (mysqli_connect_errno()) {
            echo 'Po³¹czenie z baz¹ danych nie uda³o siê. Klikaj jeszcze raz za chwilê';
            exit;
        }

        $strona = $_GET['strona'];
      var_dump($strona);
        
        

        if ($strona == "kurs") {


            $kurs = $_POST['nazwa_kursu'];
            $data = $_POST['data_kursu'];

            if (!$kurs || !$data) {
                echo 'Wype³nij wszystkie pola. WprowadŸ jeszcze raz';
                exit;
            }

            if (!get_magic_quotes_gpc()) {
                $kurs = addslashes($kurs);
                $data = addslashes($data);
            }

            $zapytanie = "insert into kurs (nazwa_kursu , data) values ('" . $kurs . "' , '" . $data . "')";
        } 
        
        elseif ($strona == "prowadzacy") {
            
            $imiepro = $_POST['imie_prowadzacy'];
            $nazpro = $_POST['nazwisko_prowadzacy'];

            if (!$imiepro || !$nazpro) {
                echo 'Wype³nij wszystkie pola. WprowadŸ jeszcze raz';
                exit;
            }

            if (!get_magic_quotes_gpc()) {
                $imiepro = addslashes($imiepro);
                $nazpro = addslashes($nazpro);
            }



            $zapytanie = "insert into prowadzacy (imie , nazwisko) values ('" . $imiepro . "' , '" . $nazpro . "')";
        } 
        
        
        elseif ($strona == "student") {
            $imstu = $_POST['imie_student'];
            $nazstu = $_POST['nazwisko_student'];

            if (!$imstu || !$nazstu) {
                echo 'Wype³nij wszystkie pola. WprowadŸ jeszcze raz';
                exit;
            }

            if (!get_magic_quotes_gpc()) {
                $imstu = addslashes($imstu);
                $nazstu = addslashes($nazstu);
            }

            $zapytanie = "insert into prowadzacy (imie , nazwisko) values ('" . $imstu . "' , '" . $nazstu . "')";
        }

           $wynik = $conn->query($zapytanie);
            if ($wynik) {
    echo $conn->affected_rows . 'dane zapisane';
}

//  $student =$_POST['dane_student'];
        //   $prowadzacy=$_POST['dane_prowadzacy']; !$student || !$prowadzacy || 
// '".$student."' , '".$prowadzacy."' , 
        ?>

    </body>

</html>