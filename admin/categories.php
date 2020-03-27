<?php 
include "admin_includes/adm_header.php";
include "admin_includes/adm_navigation.php";
include "admin_includes/adm_sidebar.php";
include "admin_includes/adm_heading.php";


use Controllers\Categorys; 
$all_categories = Categorys::category();
include "../app/views/categories_table.php";

if(isset($_GET['delete'])){
$remove_category = categorys::delete_category($_GET['delete']);
header("location: categories.php"); 
}


include "admin_includes/adm_footer.php";

?>
       
            
            
            
            
            
          





