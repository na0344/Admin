<?php
include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Add New Vendor</h2>
</div>
</div>
<hr/>

<div calss="row">


<div class="col-md-8">

<?php
if(isset($_POST['btn'])){
if($_FILES['Upload']['size']>0){
if($_FILES['Upload']['size']<400000){
	
	if($_FILES['Upload']['type']=='image/png'|| $_FILES['Upload']['type']=='image/jpeg'||$_FILES['Upload']['type']=='image/gif'){
		
		
		$dir="images/";
		$file=$_FILES['Upload']['name'];
		
		if(file_exists($dir.$_FILES['Upload']['name'])){
			
			echo  "this file is already exists";
			
		}else
			{
				move_uploaded_file($_FILES['Upload']['tmp_name'],$dir.$_FILES['Upload']['name']);

$Title=clean($_POST['Title']);
				$vname=clean($_POST['vname']);
	$pass=md5($_POST['pass']);
	$contact=$_POST['contact'];
		$addr=$_POST['addr'];
		$email=$_POST['email'];
	if(empty($_POST['Title'])||empty($_POST['contact'])||empty($_POST['email'])||empty($_POST['addr'])||empty($_POST['pass'])||empty($_POST['vname'])){
		
		echo"<p class='text-danger'>Fill the Required Feilds</p>";
	}
	else{
		
		$query2="Insert into vendor values('','$Title','$file','$contact','$email','$addr','$vname','$pass',now())";
	
	
		if(mysqli_query($conn,$query2)){
			
			
			echo"<p class='text-sucess'> Thank you. Your record has been submitted</p>";
			
		}
	}
}
}
			}
}else{  
echo "Image is Compusurly";
}

	
	
	
}


?>

<form method="post" action="" enctype="multipart/form-data">


<div class="form-group">
<label> Bakery Title</label>
<input type="text" class="form-control" name="Title"/>
</div>

<div class="form-group">
<label> Bakery Logo</label>
<input type="file" class="form-control" name="Upload"/>
</div>

<div class="form-group">
<label> Bakery Contact</label>
<input type="text" class="form-control" name="contact"/>

</div>
<div class="form-group">
<label> Email</label>
<input type="email" class="form-control" name="email"/>
</div>

<div class="form-group">
<label> Bakery Address</label>
<input type="text" class="form-control" name="addr"/>
</div>

<div class="form-group">
<label>  Vendor Name</label>
<input type="text" class="form-control" name="vname"/>
</div>

<div class="form-group">
<label>  Set Password</label>
<input type="password" class="form-control" name="pass"/>
</div>

<div class="form-group">
<input type="submit" class="btn btn-default" name="btn" value="Add New Vendor"/>
</div>
</form>

</div>
</div>
</div>

<?php include("footer.php"); ?>










