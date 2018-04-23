<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Manage All Vendor</h2>
</div>
</div>
<hr/>


<div class="row">
<div class="col-md-10">
<table class="table table-bordered">
  <tr>
    <td>S.No</td>
    <td>Bakery Name</td>
      <td>Password</td>
            <td>Vendor Image</td>
    <td>Email</td>
        <td>Contact</td>
          <td>Address</td>
    <td>Delete</td>
    <td>Update</td>
    <td>Enable</td>
  </tr>
  
  <?php
  $query="select * from vendor";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  $i=1;
	  
while($row=mysqli_fetch_assoc($sql)){
  
  ?>
  <tr>
    <td><?php echo $i++; ?></td>
   
     <td><?php echo ucwords($row['bakeyname']);?> </td>
     
      <td><?php echo ucwords($row['password']);?> </td>
      <td><img src="images/<?php echo ucwords($row['image']);?>" alt="" height="100" width="100"/> </td>
    <td><?php
	 echo ucwords($row['email']);?> </td>
     
     <td><?php
	 echo ucwords($row['contact']);?> </td>
     
     <td><?php
	 echo ucwords($row['addr']);?> </td>
     
     
    <td><a href="del.php?uid=<?php echo $row['vid'];?>" class="btn btn-danger"> Delete</a></td>
   <td> <a href="edit.php?uid=<?php echo $row['vid'];?>" class="btn btn-success"> Edit</a></td>
    <td> <a href="enable.php?uid=<?php echo $row['vid'];?>" class="btn btn-primary"> Enable</a></td>
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