<?php
include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Add New Sub Category</h2>
</div>
</div>
<hr/>

<div calss="row">


<div class="col-md-8">

<?php
if(isset($_POST["btn"])){
	
	if(empty($_POST['SubCat'])){
		
		echo"<p class='text-danger'>Fill the Required Feilds</p>";
	}
	else{
		$Subcat=clean($_POST['SubCat']);
		
		$query2="Insert into subcategory values('','$_POST[Cat]','$Subcat')";
	
		
		if(mysqli_query($conn,$query2)){
			
			
			echo"<p class='text-sucess'> Thank you. Your record has been submitted</p>";
			
		}
	}
}


?>

<form method="post" action="">


<div class="form-group">
<label> Sub Category name</label>
<input type="text" class="form-control" name="SubCat"/>
</div>

<div class="form-group">
<label> Select Category Name</label>
<select class="form-control" name="Cat">
<?php  
$query="select * from category";
$sql=mysqli_query($conn,$query);
if(mysqli_num_rows($sql)>0)
{
	
	while($row=mysqli_fetch_assoc($sql)){
		
		
		
		
	
?>
<option value="<?php echo $row['Cid'];  ?>"><?php echo $row['CatName'];  ?></option>
<?php 

	}
}
?>
</select>
</div>

<div class="form-group">
<input type="submit" class="btn btn-default" name="btn" value="Add New Sub Category"/>
</div>
</form>

</div>
</div>
</div>

<?php include("footer.php"); ?>










