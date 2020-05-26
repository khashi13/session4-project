<?php
$db=@mysqli_connect('localhost','root','','personal');
if($db==false) {
    echo  'error database';
}
    $id=(int)$_GET['id'];

  if($_SERVER['REQUEST_METHOD']==="POST"){
     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $age=(int)$_POST['age'];
    $query="UPDATE `usr` SET fname='$fname',lname='$lname',age=$age WHERE id=$id";
    $result=$db->query($query);
    if($result==false) {
        echo 'update error';
        echo $db->error;
    }

   echo 'user has been update';
  }
  $query="SELECT * FROM usr WHERE id=$id";
  $result=$db->query($query);
  if($result==false) {
      echo "result error";
      echo $db->error;
      echo $query;
  }
  $user=$result->fetch_assoc();









?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update form</title>
</head>
<body >
<h2 style="text-align: center;color: blueviolet">update form</h2>
<form action="" method="post" style=""></form>
<table cellpadding="2" cellspacing="2" border="2">
    <tr>
        <th>=></th>
        <th>فرم ثبت نام</th>
    </tr>
    <tr>
        <td><label>نام</label></td>
        <td><input type="text" name="fname" value="<?= $user['fname'] ?>"></td>
    </tr>
    <tr>
        <td><label>نام خانوادگی</label></td>
        <td><input type="text" name="lname" value="<?= $user['lname'] ?>"></td>
    </tr>
    <tr>
        <td><label>سن</label></td>
        <td><input type="number" name="age" value="<?= $user['age']?>" ></td>
    </tr>
    <tr>
        <td></td>
        <td><input value="ذخیره ویرایش" type="submit"  ></td>
    </tr>
</table>
</body>
</html>
