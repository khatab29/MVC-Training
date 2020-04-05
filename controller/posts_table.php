<?php
include "start.php";
use Controllers\Posts;
//display posts data
$posts_Data = posts::get_posts();
foreach($posts_Data as $post_Data){

$post_Data['author_name']  = posts::post_author($post_Data['id']);
$post_Data['category_title'] = posts::post_category($post_Data['id']);
$post_Data['count_comment'] = Posts::post_comment_count($post_Data['id']);

}
//delete posts
if(isset($_GET['deletePost'])){
$post_id = $_GET['deletePost'];
$delete_post = posts::delete_post($post_id);
header("location: index.php?source=posts_table");
}
//approve posts
if(isset($_GET['approve'])){
$post_id = $_GET['approve'];
$approve_post = posts::approve_post($post_id, "Approved");
header("location: index.php?source=posts_table");
}


//$post_tags = posts::post_tags(4); 
//var_dump($post_tags);

include "app/views/posts_table.php";





 