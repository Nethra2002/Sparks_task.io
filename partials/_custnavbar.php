<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="navbar.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Document</title>
    <style>

*{
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
}

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
                <a href="../customer/custtransfer.php">Transfer</a>
                <a href="../customer/custtranslist.php">History</a>
                <a href="../customer/custbalance.php">Balance</a>
                <a href="../partials/contact.php">Contact Us</a>
            </div>
    
            <button><a href = "../index.html" >Log out</a></button>
        </nav>
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