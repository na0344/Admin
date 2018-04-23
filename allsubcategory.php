<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Manage All Sub Categories</h2>
</div>
</div>
<hr/>


<div class="row">
<div class="col-md-10">
<table class="table table-bordered" >
  <tr>
    <td>S.No</td>
    <td>Sub Category Name</td>\
    <td>Category Name</td>
    <td>Action</td>
  </tr>
  
  <?php
  $query="select * from subcategory";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  $i=1;
	  
while($row=mysqli_fetch_assoc($sql)){
  
  ?>
  <tr>
    <td><?php echo $i++; ?></td>
     <td><?php echo ucwords($row['SCatName']);?> </td>
     
     
    <td><?php
	$query2="select * from category where Cid='$row[Cid]'";
	$sql2=mysqli_query($conn,$query2);
	$row2=mysqli_fetch_assoc($sql2);
	
	
	 echo ucwords($row2['CatName']);?> </td>
    <td><a href="del.php?Sid=<?php echo $row['Sid'];?>" class="btn btn-danger"> Delete</a></td>
  </tr>
  
  
  <?php
}
  }
  
  ?>
  
  
</table>





</div>
</div>
</div>





<?php

include("footer.php");?>