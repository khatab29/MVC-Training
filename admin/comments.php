<?php 
include "admin_includes/adm_header.php";
use Controllers\Comments;
if(isset($_GET['approve'])){
    $approved_comment = comments::get_approve_comment($_GET['approve'], "approved");
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
       $comments_Data = comments::all_comments_data();
       include "../app/views/view_all_comments.php";
                break;

}



include "admin_includes/adm_footer.php";

?>
       
            
            
            
            
            
          





