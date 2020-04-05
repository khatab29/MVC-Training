<?php
include "start.php";
use Controllers\Posts;
use Controllers\Comments;

if(isset($_GET['post_id'])){
$post_id = $_GET['post_id'];
//get post data
$post_data = posts::post_info($post_id); 
$post_data['username'] = posts::post_author($post_id);
$post_user_id = posts::post_user_id($post_id);
}
//upload post comment
$comment ="";
$comment_error = "";
if(isset($_POST['add_comment'])){
if(empty($_POST['comment'])){
$comment_error = "please insert a comment";
}else{
$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
$upload_comment = Comments::upload_comment($post_id, $post_user_id, $comment);
}
}

//get post comments
$post_comments = Comments::get_post_comment($post_id);
foreach($post_comments as $comment){
$comment['username'] = Comments::comment_author($comment['id']);
    
}


include "app/views/post.php";