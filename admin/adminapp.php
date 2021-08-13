<?php

include("../partials/connfile.php");
$aname = $_GET['custName'];
$sqlvar = "UPDATE `custactab` SET custApproval='Y'";
$result = $conn -> query($sqlvar);
if($result){
    header('location:admincustapp.php');
}

?>
