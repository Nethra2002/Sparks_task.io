<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/adminlogin.css"/>
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
    
</head>
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
        <h1>Login Here</h1>
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>LOGIN</h2>

                    <?php
                    
                    session_start();
                    
                    if($_SERVER["REQUEST_METHOD"]== "POST"){
                    include '../partials/connfile.php';
                    $_SESSION['custName']=='no customer';
                    $v1 = $_POST["text1"];
                    $v2 = $_POST["text2"];
                    // echo $mysql_user." ".$mysql_password;

                    $sqlvar = "select * from `custactab` where custName ='$v1' and pWord= '$v2' and custApproval='Y'";
                    $result = $conn ->query($sqlvar);
                    if($result ->num_rows > 0){
                        $_SESSION['custName']=$v1;
                        echo($_SESSION['custName']);
                        header("location: custmainpage.php");
                    }
                    else{
                        echo "userid or password not correct";
                    }
                    }
                    ?>

                    <form action="custlogin.php" method="post">
                        <input type="text" name = "text1" placeholder="User Name" required autofocus="">
                        <input type="password" name = "text2" placeholder="User Password" required autofocus="">
                        <button class="btn" name = "login" type="submit"><a href="custmainpage.php">Log In</a></button>
                    </form>
                </div>

                <div class="form-img">
                    <img src="../images/safe_bank.jpg" alt="safe_bank">
                </div>
            </div>
        </div>
    </div>


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