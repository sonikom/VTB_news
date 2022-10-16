<?php
header('Content-Type:text/html; charset=utf-8');

$host='localhost';
$user='root';
$pass='vertrigo';
$db='vtb';

$con= mysqli_connect($host,$user,$pass,$db);

//if($con)    echo ".............    yes ";
//else    echo '--------------   no';
//
//$sql="SELECT t.title, t.article
//  FROM table1 t 
//  WHERE t.user = 'gen'";
//$query= mysqli_query($con, $sql);
//while ($r= mysqli_fetch_assoc($query)){
//    $t = $r['title'];
//    $a = $r['article'];
//    echo "<br> заголовок $t, статья $a";
//}
//
//


?>

