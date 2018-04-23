<?php  
if(session_start())
{
//session is a way to store information (in variables) to be used across multiple pages.  
session_destroy(); 
session_unset();  
header("Location:index.php");//use for the redirection to some page 
}
?>
</html>