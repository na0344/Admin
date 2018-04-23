<?php  include("config.php");?>

<?php if(empty($_SESSION['user'])){
	echo"<script> window.location='index.php'</script>";
}
?>
<?php  include("function.php");?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Apki-Bakery|Admin Area</title>
<!-- BOOTSTRAP STYLES-->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- FONTAWESOME STYLES-->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- MORRIS CHART STYLES-->
<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
<!-- CUSTOM STYLES-->
<link href="assets/css/custom.css" rel="stylesheet" />
<!-- GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="wrapper">
  <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html">Welcome Admin</a> </div>
    <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php echo "Today is " . date("Y/m/d");echo "," . date("l");?>  <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
  </nav>
  <!-- /. NAV TOP  -->
  <nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
      <ul class="nav" id="main-menu">
        <li class="text-center"> <img src="assets/img/find_user.png" class="user-image img-responsive"/> </li>
        <li> <a class="active-menu"  href="dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a> </li>
        
        <li><a href="#"><i class="fa fa-sitemap fa-3x"></i> Category
        <span class="fa arrow"></span></a>
        <ul class=" nav nav-second-level">
        <li><a href="addcategory.php"> Add New Category</a></li>
         <li><a href="allcategory.php"> Manage All Categories</a></li>
         </ul>
         </li>
         
         <li><a href="#"><i class="fa fa-sitemap fa-3x"></i> Sub Category
        <span class="fa arrow"></span></a>
        <ul class=" nav nav-second-level">
        <li><a href="addsubcategory.php"> Add New Sub Category</a></li>
         <li><a href="allsubcategory.php"> Manage All Sub Categories</a></li>
         </ul>
         </li>
         
         
         <li><a href="#"><i class="fa fa-suitcase fa-3x"></i> Products
        <span class="fa arrow"></span></a>
        <ul class=" nav nav-second-level">
        <li><a href="addprdouct.php"> Add New Product</a></li>
         <li><a href="allproduct.php"> Manage All Products</a></li>
         </ul>
         </li>
         
         <li><a href="#"><i class="fa fa-suitcase fa-3x"></i> Vendors
        <span class="fa arrow"></span></a>
        <ul class=" nav nav-second-level">
        <li><a href="addvendor.php"> Add New Vendor</a></li>
         <li><a href="allvendor.php"> Manage All Vendors</a></li>
         </ul>
         </li>
         <li><a href="#"><i class="fa fa-suitcase fa-3x"></i> Users
        <span class="fa arrow"></span></a>
        <ul class=" nav nav-second-level">
        <li><a href="adduser.php"> New User</a></li>
         <li><a href="alluser.php"> Manage All Users</a></li>
         </ul>
         </li>
         
         <li><a href="#"><i class="fa fa-suitcase fa-3x"></i> Comments
        <span class="fa arrow"></span></a>
        <ul class=" nav nav-second-level">
        <li><a href="comment.php"> New Comments</a></li>
         <li><a href="allcomments.php"> Manage All Comments</a></li>
         </ul>
         </li>
      </ul>
    </div>
  </nav>
  <!-- /. NAV SIDE  -->
  <div id="page-wrapper" >