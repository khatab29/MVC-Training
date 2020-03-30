<?php 
include "admin_includes/adm_header.php";
use Controllers\Comments;


include "admin_includes/adm_navigation.php";
include "admin_includes/adm_sidebar.php";
include "admin_includes/adm_heading.php";




if (isset($_GET['source'])){
    $source = $_GET['source'];
}else{
    $source = "";
}
    
    switch($source){
        case    "add_user";
        include "../app/views/add_user.php";
            break;
        case    "edit_post";
        include "../app/views/edit_user.php";
            break;    
            
        default:
       $comments_Data = comments::all_comments_data();
       include "../app/views/view_all_users.php";
                break;

}



include "admin_includes/adm_footer.php";

?>
       
            
            
            
            
            
          





