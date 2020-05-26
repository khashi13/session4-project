<?php
$db=@mysqli_connect('localhost','root','','personal');
if($db==false) {
    echo 'database error';
}
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = (int)$_POST['age'];
    $query = "INSERT INTO usr(fname,lname,age) VALUES  ('$fname','$lname',$age)";
    $Result = $db->query($query);
    if ($Result == false) {
        echo "insert error";
        echo $db->errorl . "<br>";
    }

    echo "user been add";
}
?>
<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <form action="" method="post" >
        <table cellpadding="2" cellspacing="2" border="2">
            <tr>
                <th>=></th>
                <th>فرم ثبت نام</th>
            </tr>
            <tr>
                <td><label>نام</label></td>
                <td><input type="text" name="fname" value=""></td>
            </tr>
            <tr>
                <td><label>نام خانوادگی</label></td>
                <td><input type="text" name="lname" value=""></td>
            </tr>
            <tr>
                <td><label>سن</label></td>
                <td><input type="number" name="age" value="" ></td>
            </tr>
            <tr>
                <td></td>
                <td><input value="ذخیره" type="submit"  ></td>
            </tr>
        </table>

    </form>
    //add form
 <script type="text/javascript" src="script.js"></script>
</body>
</html>
