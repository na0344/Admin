<?php

include("header.php");
if(isset($_REQUEST['id'])){
	
	$Id=$_REQUEST['id'];
$query="delete from category where Cid= '$Id'";
mysqli_query($conn,$query);
echo"<script> window.location='allcategory.php'</script>";
}


if(isset($_REQUEST['Sid'])){
	
	$SId=$_REQUEST['Sid'];
$query2="delete from subcategory where Sid= '$SId'";
mysqli_query($conn,$query2);
echo"<script> window.location='allsubcategory.php'</script>";
}

?>