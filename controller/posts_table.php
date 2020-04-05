<?php
include "start.php";
use Controllers\Posts;
$posts_Data = posts::get_posts();

if(isset($_GET['deletePost'])){
$post_id = $_GET['deletePost'];
$delete_post = posts::delete_post($post_id);
header("location: index.php?source=posts_table");
}

if(isset($_GET['approve'])){
$post_id = $_GET['approve'];
$approve_post = posts::approve_post($post_id, "Approved");
header("location: index.php?source=posts_table");
}


foreach($posts_Data as $post_Data){
  
  $post_Data['author_name']  = posts::post_author($post_Data['id']);
  $post_Data['category_title'] = posts::post_category($post_Data['id']);
 

}






$post_tags = posts::post_tags(4); 
foreach($post_tags as $tags){
var_dump($tags['name']);
 
  }
 

include "app/views/posts_table.php";





 