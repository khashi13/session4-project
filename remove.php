<?php
$db=@mysqli_connect('localhost','root','','personal');
if($db==false) {
    echo 'database error';
}
$id=(int)$_GET['id'];
$query="DELETE FROM `usr` WHERE id=$id";
$result=$db->query($query);
if($result==false) {
    echo 'result error';
    echo $db->error . "<br>";
    echo $query;
}
    header("Location :connect.php");
        exit;