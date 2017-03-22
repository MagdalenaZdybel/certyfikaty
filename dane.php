<?php
if (!$db_link = mysql_connect("127.0.0.1" , "c5magda01" , "utewFKxXQK50@")){
    echo('WystÄ…piĹ‚ bĹ‚Ä…d podczas poĹ‚Ä…czenia z serwerem MySQL...<BR>');
    exit;
}
else {
    echo('PoĹ‚Ä…czenie z bazÄ… zostaĹ‚o nawiÄ…zane...<BR>');
}
if(!mysql_select_db('test' , $db_link)){
    echo('WystÄ…piĹ‚ bĹ‚Ä…d podczas wyboru bazy danych: magda_blog<BR>');
}
 else {
     echo('ZostaĹ‚a wybrana baza danych: magda_blog<BR>');
}
if(!mysql_close($db_link)){
    echo('WystÄ…piĹ‚ bĹ‚Ä…d podczas zamykania poĹ‚Ä…czenia z serwerem MySQL...<BR>');
}
 else {
     echo('PoĹ‚Ä…czenie z serwerem MySQL zostaĹ‚o zamkniÄ™te...<BR>');
}
            
?>)