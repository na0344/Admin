<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Manage All Categories</h2>
</div>
</div>
<hr/>


<div class="row">
<div class="col-md-10">
<table class="table table-bordered" >
  <tr>
    <td>S.No</td>
    <td>Category Name</td>
    <td>Action</td>
  </tr>
  
  <?php
  $query="select * from category";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  $i=1;
	  
while($row=mysqli_fetch_assoc($sql)){
  
  ?>
  <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo ucwords($row['CatName']);?> </td>
    <td><a href="del.php?id=<?php echo $row['Cid'];?>" class="btn btn-danger"> Delete</a></td>
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