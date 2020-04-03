<?php
include "start.php"; 
use Controllers\Posts;
$posts_Data = posts::get_approved_posts("Approved");
foreach($posts_Data as $post_Data){
$post_Data['author_name'] = Posts::post_author($post_Data['id']);
}
include "app/views/post_display.php";