<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="adminstyle.css"/>
</head>
<body style="background: linear-gradient(70deg,
                      #d064d6  ,
                        #b9ecee);">

<?php include '../partials/_navbar.php'; ?>

<table>
    <tr><td>AC name</td><td>Details</td><td>Facilities</td><td>Min balanace</td></tr>
    <?php
        session_start();
        include '../partials/connfile.php';
        $res="";
        $sqlvar = "select * from `acctype` order by accTypeName";
        $result = $conn ->query($sqlvar);
        while($row=$result->fetch_row()){
            echo ("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>");
        }
     ?>

    </table>

    <button><a href="adminmainpage.php">Back</a></button>
</body>
</html>