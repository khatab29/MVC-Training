<?php 
include "start.php";
include "includes/header.php";  
include "includes/navigation.php";


use Controllers\Posts;         
$postsData = Posts::get_posts();
include "app/views/PostsDisplay.php";






include "includes/sidebar.php"; 
include "includes/widget.php";  
include "includes/footer.php";  

?>

   

   

        
            
            
            



