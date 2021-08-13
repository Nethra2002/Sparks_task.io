<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="../admin/adminstyle.css"/>
</head>
<body style = "background: linear-gradient(70deg,
                        #d064d6,
                        #b9ecee);">

<?php include '../partials/_custnavbar.php'; ?>

<table>
    <?php
        session_start();
        include '../partials/connfile.php';
        $v1 = $_SESSION['custName'];

        $sqlvar = "select * from `custactab` where custName ='$v1'";
        $result = $conn ->query($sqlvar);
        while($row= $result->fetch_row()){
            echo("<tr><td>Customer Name</td><td>".$row[0]."</td></tr>
                   <tr><td>Email id</td><td>".$row[3]."</td></tr>
                   <tr><td>Account type name</td><td>".$row[4]."</td></tr>");
        }
     ?>

    </table>

    <button><a href="custmainpage.php">Back</a></button>
</body>
</html>