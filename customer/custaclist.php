<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="../admin/adminstyle.css"/>
</head>
<body>

<?php include '../partials/_custnavbar.php'; ?>

<table>
    <tr><td colspan=4><h3><a href="custlogin.php">Click here to login</a></h3></td></tr>
    <tr><td colspan=4><h3>Please select account type then signup</h3></td></tr>
    <?php
        session_start();
        include '../partials/connfile.php';
        $res="";
        $sqlvar = "select * from `acctype` order by accTypeName";
        $result = $conn ->query($sqlvar);
        while($row=$result->fetch_row()){
            echo ("<tr><td><a href=custsignup.php?actype=".$row[0].">".$row[0]."</a></td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>");
        }
     ?>

    </table>

    <button><a href="custmainpage.php">Back</a></button>
</body>
</html>