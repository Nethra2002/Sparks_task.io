<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="../admin/adminstyle.css"/>
</head>
<body style="background: linear-gradient(70deg,
                        #d064d6,
                        #b9ecee);">

<?php include '../partials/_custnavbar.php'; ?>

<table>
    <tr><td colspan=6><h2 style= "text-align:center;">TRANSACTION LIST</h2></td></tr>
    <tr><td>Transaction number</td><td>Date</td><td>Account name</td><td>Debited amount</td><td>Credited amount</td><td>Transfer details</td></tr>
    <?php
        session_start();
        include '../partials/connfile.php';
        $v1 = $_SESSION['custName'];
        $sqlvar = "select * from `transactiontable` where acName ='$v1' order by tranName desc";
        $result = $conn ->query($sqlvar);
        while($row=$result->fetch_row()){
            echo ("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td></tr>");
        }
     ?>

    </table>

    <button><a href="custmainpage.php">Back</a></button>
</body>
</html>