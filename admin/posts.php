<?php 
include "admin_includes/adm_header.php";
use Controllers\Posts;



if(isset($_GET['deletePost'])){
    $delte_post_id = $_GET['deletePost'];
    $delete_post = Posts::delete_post($delte_post_id);
    header("location: posts.php");
}

include "admin_includes/adm_navigation.php";
include "admin_includes/adm_sidebar.php";
include "admin_includes/adm_heading.php";




if (isset($_GET['source'])){
    $source = $_GET['source'];
}else{
    $source = "";
}
    
    switch($source){
        case    "add_post";
        include "../app/views/add_post.php";
            break;
            
        default:
            $posts_Data = Posts::get_posts();
include "../app/views/view_all_posts.php";
                break;

}








include "admin_includes/adm_footer.php";

?>
       
            
            
            
            
            
          





