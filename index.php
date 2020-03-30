<?php 
include "includes/header.php";  
include "includes/navigation.php";


use Controllers\Posts;
if(isset($_GET['cate-id'])){
$postsData = Posts::category_post($_GET['cate-id']);  
include "app/views/PostsDisplay.php";
}else{
$postsData = Posts::get_posts();
include "app/views/PostsDisplay.php";
}




include "includes/login.php";
include "includes/index_sidebar.php";
include "includes/widget.php";  
include "includes/footer.php";  
?>

   

   

        
            
            
            



