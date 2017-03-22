<?php
<HTML>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Blog Magdy Z.</title>
  <link rel="stylesheet" href="css/own.css">
  <body>
<header>
<h2>Blog Magdy Z.na potrzeby DSP 2017</h2>
</header>
<div>Hello world! - jakie to odkrywcze :) </div>
</body>
</html>

if (!$db_link = mysql_connect("127.0.0.1" , "c5magda01" , "utewFKxXQK50@")){
    echo('Wystąpił błąd podczas połączenia z serwerem MySQL...<BR>');
    exit;
}
else {
    echo('Połączenie z bazą zostało nawiązane...<BR>');
}
if(!mysql_select_db('test' , $db_link)){
    echo('Wystąpił błąd podczas wyboru bazy danych: magda_blog<BR>');
}
 else {
     echo('Została wybrana baza danych: magda_blog<BR>');
}
if(!mysql_close($db_link)){
    echo('Wystąpił błąd podczas zamykania połączenia z serwerem MySQL...<BR>');
}
 else {
     echo('Połączenie z serwerem MySQL zostało zamknięte...<BR>');
}
            
?>)
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

