<?php
 include "start.php"; 





use Controllers\Posts;

$posts_Data = Posts::get_posts();
foreach($posts_Data as $post_Data){
  
$post_Data['author'] = Posts::post_author($post_Data['id']);
}


include "app/views/post_display.php";