<?php include("config.php");?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Apki-Bakery Admin : Login</h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
                           <?php


								
								if(isset($_POST['btn'])){
							
								
					if(empty($_POST["Name"] )|| empty($_POST["Password"])){
						
						$err="<p class='text-danger'>Fill the Required Fields</p>";		
							}
							else{
								 $Name = $_POST['Name'];
								$Password  =md5($_POST['Password']);
							
							$query="select * from admin where Name='$Name' and Password='$Password'";
		
							$sql=mysqli_query($conn,$query);
							
							if(mysqli_num_rows($sql) > 0){					
								$row=mysqli_fetch_assoc($sql);
						$_SESSION['user']=$row['Name'];
								echo "<script> window.location='dashboard.php'</script>";
							
							}
							
							else{
								$err2="<p class='text-danger'>Invalid Username or Password</p>";		
							}
							}
								}
							
							
							?>
                            
                            
                            
                            
                            
                            
                            
                            
                                <form role="form" action="" method="post">
                                       <br />
                                       <?php
									   if(isset($err)){
										   echo "$err";
									   }
									   if(isset($err2)){
										   echo "$err2";
									   }
									   
									   ?>
                                       
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Your Username " name="Name" />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Your Password"  name="Password"/>
                                        </div>
                                  
                                     
                                     <input type="submit" name="btn" class="btn btn-primary " value="Login Here">
                                    <hr />
                                   
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
