<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Manage All Products</h2>
</div>
</div>
<hr/>


<div class="row">
<div class="col-md-10">
<table class="table table-bordered" >
  <tr>
    <td>S.No</td>
    <td>Product Name</td>
      <td>Image</td>
    <td>Sub Category Name</td>
    <td>Action</td>
  </tr>
  
  <?php
  $query="select * from products";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  $i=1;
	  
while($row=mysqli_fetch_assoc($sql)){
  
  ?>
  <tr>
    <td><?php echo $i++; ?></td>
   
     <td><?php echo ucwords($row['Name']);?> </td>
     
      <td><img src="images/<?php echo ucwords($row['Image']);?>" alt="" height="100" width="100"/> </td>
    <td><?php
	$query2="select * from subcategory where Sid='$row[Sid]'";
	$sql2=mysqli_query($conn,$query2);
	$row2=mysqli_fetch_assoc($sql2);
	
	
	 echo ucwords($row2['SCatName']);?> </td>
    <td><a href="del.php?Pid=<?php echo $row['Pid'];?>" class="btn btn-danger"> Delete</a></td>
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