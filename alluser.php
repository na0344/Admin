<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> Manage All Users</h2>
</div>
</div>
<hr/>


<div class="row">
<div class="col-md-10">
<table class="table table-bordered">
  <tr>
    <td>S.No</td>
    <td>Customer Name</td>
      <td>Password</td>
    <td>Email</td>
        <td>Contact</td>
          <td>Address</td>
    <td>Delete</td>
    <td>Update</td>
    <td>Enable</td>
  </tr>
  
  <?php
  $query="select * from users";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  $i=1;
	  
while($row=mysqli_fetch_assoc($sql)){
  
  ?>
  <tr>
    <td><?php echo $i++; ?></td>
   
     <td><?php echo ucwords($row['username']);?> </td>
     
      <td><?php echo ucwords($row['password']);?> </td>
    <td><?php
	 echo ucwords($row['email']);?> </td>
     
     <td><?php
	 echo ucwords($row['contact']);?> </td>
     
     <td><?php
	 echo ucwords($row['address']);?> </td>
     
     
    <td><a href="del.php?uid=<?php echo $row['user_id'];?>" class="btn btn-danger"> Delete</a></td>
   <td> <a href="edit.php?uid=<?php echo $row['user_id'];?>" class="btn btn-success"> Edit</a></td>
    <td> <a href="enable.php?uid=<?php echo $row['user_id'];?>" class="btn btn-primary"> Enable</a></td>
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