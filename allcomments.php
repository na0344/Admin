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
<table class="table table-bordered">
  <tr>
    <td>S.No</td>
    <td>Email</td>
     
            <td>Comment</td>
   <td>Product Name</td>

   
    
  </tr>
  
  <?php

  
  
  
  
  $query="select * from comments where Status='Approved'";
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