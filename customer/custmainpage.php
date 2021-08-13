<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing: border-box;
        }

        body{
            background: linear-gradient(70deg,
                        #d064d6,
                        #b9ecee);
        }

        table{
            position: relative;
            font-size: 120%;
            align-items: center;
            padding: 2px;
            background-color: #eeeeef;
            margin: 2% auto;
            width:50%;
            height: 60vh;
            box-shadow: 2px 9px 49px -17px rgba(0,0,0,0.1);
        }

        h2{
            position:relative;
            text-align: center;
            margin-top:8%;
            font-size:2.5rem;
        }

        table td{
            border: 1px solid black;
            width:50%;
            height:20%;
            text-align:center;
        }

        table a{
            text-decoration:none;
            margin-bottom: 3%;
            padding: 2%;
            color:black;
            font-size:1.5rem;
        }
    </style>
</head>
<body>
    <?php
    include '../partials/_custnavbar.php';
    ?>
    <div>
        <table>
            <h2>Customer main page</h2>
            <tr>
                <td><a href = custdetails.php>Account details</a></td>
                <td><a href = custbalance.php>Check Balance</a></td>
            </tr>
            <tr>
                <td><a href = custtransfer.php>Transfer Money</a></td>
                <td><a href = custtranslist.php>Transaction List</a></td>
            </tr>           
        </table>
    </div>
</body>
</html>