<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="adminacdets.css"/>
</head>
<body>

<?php
    include '../partials/_navbar.php';
    ?>
    
    <div class="login-form">
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Account type</h2>
                    <?php
                    session_start();
                    $res="";
                    if($_SERVER["REQUEST_METHOD"]== "POST"){
                    include '../partials/connfile.php';
                    $accTypeName = $_POST["text1"];
                    $accDetails = $_POST["text2"];
                    $facility = $_POST["text3"];
                    $minbalance = $_POST["text4"];
                    // echo $mysql_user." ".$mysql_password;
                    $sqlvar = "insert into acctype values('$accTypeName', '$accDetails', '$facility', '$minbalance')";
                    $result = $conn ->query($sqlvar);
                    if($result){
                        $res = "Record Inserted";
                    }
                    else{
                        echo "Record not inserted due to some issue";
                    }
                    }
                    ?>

                    <form action="adminacdets.php" method="post">
                        <input type="text" name = "text1" placeholder="Account name" required autofocus="">
                        <input type="text" name = "text2" placeholder="Account details" required autofocus="">
                        <input type="text" name = "text3" placeholder="Facilites" required autofocus="">
                        <input type="text" name = "text4" placeholder="Minimum balance " required autofocus="">
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
            <a href="adminmainpage.php">Back</a>
        </div>
    </div>
</body>
</html>