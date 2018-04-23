<?php
include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Add New Category</h2>
</div>
</div>
<hr/>

<div calss="row">


<div class="col-md-8">

<?php
if(isset($_POST["btn"])){
	
	if(empty($_POST['Category'])){
		
		echo"<p class='text-danger'>Fill the Required Feilds</p>";
	}
	else{
		$cat=clean($_POST['Category']);
		
		$query="Insert into category values('','$cat')";
		
		
		if(mysqli_query($conn,$query)){
			
			
			echo"<p class='text-sucess'> Thank you. Your record has been submitted</p>";
			
		}
	}
}


?>

<form method="post" action="">


<div class="form-group">
<label> Category name</label>
<input type="text" class="form-control" name="Category"/>
</div>

<div class="form-group">
<input type="submit" class="btn btn-default" name="btn" value="Add New Category"/>
</div>
</form>

</div>
</div>
</div>

<?php include("footer.php"); ?>




























