<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="../admin/adminacdets.css"/>
</head>
<style>
        .nav-bar{
    position: absolute;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 1% 0%;
    background-color:transparent;
}

.nav-items > a{
    text-decoration: none;
    font-size: 1.2rem;
    font-weight: 600;
    color: hsl(240, 8%, 5%);
    margin-left: 25px;
}

.nav-bar > button{
    cursor: pointer;
    padding: 1%;
    border: none;
    font-weight: 600;
    border-radius: 16px;
    outline-width: 0em;
    color: hsl(240, 8%, 5%);
    background-color: rgb(248, 248, 248);
}

.nav-bar > button > a{
    text-decoration:none;
}

.burger{
    display: none;
    cursor: pointer;
}

.burger div{
    width: 25px;
    height: 3px;
    background-color: rgb(10, 10, 10);
    margin: 5px;
}

@media screen and (max-width:768px){
    
    body{
        overflow-x: hidden;
    }

    .nav-items{
        position: absolute;
        left: 15%;
        height: 60vh;
        top: 10vh;
        background-color: rgb(255, 255, 255);
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 50%;
        transform: translateX(-150%);
        transition: transform 0.5s ease-in;
    }

    .nav-items > a{
        margin: 6%;
        font-weight: 600;
    }

    .burger{
        display: block;
    }
}

.nav-active{
    transform: translateX(0%);
}
    </style>
<body>

        <div>
            <nav class="nav-bar">
        
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
        
                <h1>SPARKS BANK</h1>
                <div class="nav-items">
                    <a href="../index.html">Home</a>
                    <a href="#">Transfer</a>
                    <a href="#">History</a>
                    <a href="#">Balance</a>
                    <a href="../partials/contact.php">Contact Us</a>
                </div>
        
                <button><a href = "#" >Log out</a></button>
            </nav>
        </div>


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
                    $v1 = $_POST["text1"];
                    $v2 = $_POST["text2"];
                    $v3 = $_POST["text3"];
                    $v4 = $_POST["text4"];

                    $v5=$_SESSION["actype"];

                    // echo $mysql_user." ".$mysql_password;
                    $sqlvar = "insert into `custactab` values('$v1','$v2', '$v3', '$v4', '$v5','N')";
                    $result = $conn ->query($sqlvar);
                    if($result){
                        $res = "Record Inserted";
                    }
                    else{
                        echo "Record not inserted due to some issue";
                    }
                    }

                    else{  
                        $_SESSION["actype"]=$_GET["actype"];
                    }
                    ?>

                    <form name=form1 action="custsignup.php" method="post">
                        <input type="text" name = "text1" placeholder="Person name" required autofocus="">
                        <input type="password" name = "text2" placeholder="Passowrd" required autofocus="">
                        <input type="password" name = "text3" placeholder="Retype password" required autofocus="">
                        <input type="email" name = "text4" placeholder="Email id" required autofocus="">
                        <input type=submit name=login value="Submit" onclick="return validate()">
                    </form>
                </div>

                <div class="form-img">
                    <img src="../images/safe_bank.jpg" alt="safe_bank">
                </div>
            </div>
            <?php
            echo $res;
            ?>
            <a href ="custlogin.php">Back</a>
        </div>
    </div>


    <script language=javascript>
    function validate(){
        var x=document.form1.text1.value;
        if(x.length<3){
            alert("Please enter valid name");
            return false;
        }

        var x=document.form1.text2.value;
        if(x.length<4){
            alert("Please enter atleast 4 characters for password");
            return false;
        }

        var y=document.form1.text3.value;
        if(x!=y){
            alert("Please enter same password");
            return false;
        }

        var x=document.form1.text4.value;
        var atpos1=x.indexOf("@");
        var atpos2=x.indexOf(".");
        if(x.length < 8||atpos1<3||atpos2<5){
            alert("Please enter correct mail id");
            return false;
        }
    }
</script>

<script>
        const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-items');

    burger.addEventListener('click',() => {
        nav.classList.toggle('nav-active');
    })
} 

navSlide();
    </script>
</body>
</html>