<?php


$db=@mysqli_connect('localhost','root','','personal');
if($db==false) {
    echo 'error database';
}

$Result=$db->query("SELECT * FROM usr");
if($Result==false) {
    echo 'error for Result';
    exit;
}
$db->query("SET NAMES 'utf8' ");
$users=$Result->fetch_all(MYSQLI_ASSOC);
$i=1;
foreach ($users as $user) {
    echo " user-$i: $user[fname] $user[lname] $user[age] <a href='remove.php?id=$user[id]'>delete</a> <a href='edit-sql.php?id=$user[id]'
  style='color: #ff00aa;border:1px blue solid;border-radius:2px  '>edit</a><br>";
     $i++;

}