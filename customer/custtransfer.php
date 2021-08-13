<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="../admin/adminacdets.css"/>
</head>
<body>

<?php
    include '../partials/_custnavbar.php';
    ?>
    
    <div class="login-form">
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Transfer Money</h2>
                    <?php
                    session_start();
                    $res="";

                    // echo(date('Y/m/d'));
                    if($_SERVER["REQUEST_METHOD"]== "POST"){
                    include '../partials/connfile.php';
                    $v1 = $_SESSION['custName'];
                    $v2 = $_POST["text2"];
                    $v3 = $_POST["text3"];

                    $nvar=1001;
                    $sqlvar = "select max(tranName)+1 from `transactiontable`";
                    $result = $conn ->query($sqlvar);
                    if($row = $result -> fetch_row()){
                        $nvar = $row[0];
                    }
                    if($nvar===null){$nvar=1001;}

                    $d1=(date('Y/m/d'));
                    $sqlvar = "insert into `transactiontable` values($nvar,'$d1','$v1',0,$v2,'$v3')";
                    $result = $conn ->query($sqlvar);
                    if($result){
                        $res = "Record Inserted";
                    }
                    else{
                        echo "Record not inserted due to some issue";
                    }
                    }
                    ?>

                    <form action="custtransfer.php" method="post">
                        <input type="text" name = "text1" placeholder="To Account name" required autofocus="">
                        <input type="text" name = "text2" placeholder="Amount" required autofocus="">
                        <input type="text" name = "text3" placeholder="Transfer details" required autofocus="">
                        <input type=submit name=login value="Submit">
                    </form>
                </div>

                <div class="form-img">
                    <img src="../images/safe_bank.jpg" alt="safe_bank">
                </div>
            </div>
            <?php
            echo $res;
            ?>

            <a href="custmainpage.php">BACK</a>
        </div>
    </div>
</body>
</html>