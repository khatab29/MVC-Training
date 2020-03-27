<?php 
include "start.php";
include "includes/header.php";  
include "includes/navigation.php"; 


use Controllers\Posts;

if(isset($_POST['submit_search'])){
$blogsearch = $_POST['blog_search'];
     //search results check
$results = Posts::resultCheck($blogsearch);  
}
$posts = posts::searchBlog($blogsearch);
include "App/views/searchResults.php"; 
include "includes/sidebar.php";  
include "includes/footer.php";  

?>

   

   

        
            
            
            



