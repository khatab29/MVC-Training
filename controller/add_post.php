<?php
include "start.php";
use Controllers\Posts;
use Controllers\Users;
use Controllers\Categorys;

$post_title = $post_author = $post_image = $post_content = "";
$post_title_error = $post_author_error = $post_image_error = $post_content_error = "";
$categorys_data = Categorys::category();

if(isset($_POST['upload_post'])){
   if(empty($_POST['post_title'])){
       $post_title_error = "this field can't be empty";
   }else{
       $post_title = filter_var($_POST['post_title'], FILTER_SANITIZE_STRING);
   }
    if(empty($_POST['post_author'])){
       $post_author_error = "this field can't be empty";
   }else{
       $post_author = filter_var($_POST['post_author'], FILTER_SANITIZE_STRING);
   }
    if(empty($_POST['post_content'])){
       $post_content_error = "this field can't be empty";
   }else{
       $post_content = filter_var($_POST['post_content'], FILTER_SANITIZE_STRING);
   }
    if(empty($_POST['post_image'])){
       $post_image_error = "this field can't be empty";
   }else{
        $post_image = filter_var($_POST['post_image'], FILTER_SANITIZE_STRING);
    }
    
    $category_id = $_POST['post_cate'];
    $user_id = users::post_user_id($post_author);
    
    $post_image = $_FILES['post_image']['name'];
    $post_image_tmp = $_FILES['post_image']['tmp_name'];
   
    $upload_post = Posts::upload_post($category_id, $post_title, $user_id, $post_image, $post_content);
    move_uploaded_file($post_image_tmp, "uploaded_images/{$post_image}");
}
include "app/views/add_post.php";










