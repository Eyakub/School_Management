<?php  
/** 
 * Created by HelloEyakub. 
 * User: Eyakub Sorkar    
 */  
  
session_start();//session is a way to store information (in variables) to be used across multiple pages.  
session_destroy();  
header("Location: login.php");//use for the redirection to some page  
exit();
?>  