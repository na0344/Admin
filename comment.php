<?php

include("header.php");?>
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2> New Comments</h2>
</div>
</div>
<hr/>


<div class="row">
<div class="col-md-10">
<?php if(isset($s)){ echo $s;}?>
<table class="table table-bordered">
  <tr>
    <td>S.No</td>
    <td>Email</td>
      <td>Product Name</td>
            <td>Comment</td>
  

    <td>Action</td>
    
  </tr>
  
  <?php
  if(isset($_REQUEST['cid'])){
	
	$Id=$_REQUEST['cid'];
	$update="UPDATE comments SET Status='Approved' where Id='$Id'";
  
  if(mysqli_query($conn,$update)){
  
  $s="<p class='text-success'>Comment Updated Successfully</p>";
  echo"<script>window.location='comment.php'</script>";
  }
  }
  
  
  
  
  $query="select * from comments where Status='pending'";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
	  $i=1;
	  
while($row=mysqli_fetch_assoc($sql)){
  
  ?>
  <tr>
    <td><?php echo $i++; ?></td>
   
     <td><?php echo ucwords($row['email']);?> </td>
     
      <td><?php echo ucwords($row['Comment']);?> </td>
 
    <td><?php
	 echo ucwords($row['Pid']);?> </td>
     
  
     
    <td><a href="comment.php?cid=<?php echo $row['Id'];?>" class="btn btn-danger"> Approve</a><a href="edit.php?uid=<?php echo $row['Id'];?>" class="btn btn-success"> Reject</a></td>
  
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