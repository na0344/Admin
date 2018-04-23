<?php
include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Add New Product</h2>
</div>
</div>
<hr/>

<div calss="row">


<div class="col-md-8">

<?php
if(isset($_POST['btn'])){

$name=clean($_POST['name']);
				$password=md5($_POST['password']);
				$email=($_POST['email']);
	$contact=clean($_POST['contact']);
	$addr=clean($_POST['addr']);
	
	if(empty($_POST['name'])||empty($_POST['password'])||empty($_POST['email'])
	||empty($_POST['contact'])||empty($_POST['addr'])){
		
		echo"<p class='text-danger'>Fill the Required Feilds</p>";
	}
	else{
		
		$query2="Insert into users values('','$name','$email','$addr','$contact','$password','0',now())";
		
	
		if(mysqli_query($conn,$query2)){
			
			
			echo"<p class='text-sucess'> Thank you. Your record has been submitted</p>";
			
		}
	
}

			}



	
	
	



?>

<form method="post" action="" enctype="multipart/form-data">


<div class="form-group">
<label> Customer Name</label>
<input type="text" class="form-control" name="name"/>
</div>

<div class="form-group">
<label> Password</label>
<input type="password" class="form-control" name="password"/>
</div>

<div class="form-group">
<label> Email Address</label>
<input type="email" class="form-control" name="email"/>
</div>


<div class="form-group">
<label> Contact</label>
<input type="text" class="form-control" name="contact"/>
</div>


<div class="form-group">
<label> Address</label>
<input type="text" class="form-control" name="addr"/>
</div>


<div class="form-group">
<input type="submit" class="btn btn-default" name="btn" value="Add New Customer"/>
</div>
</form>

</div>
</div>
</div>

<?php include("footer.php"); ?>










