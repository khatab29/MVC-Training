<?php
if(isset($_GET['source'])){
    $source = $_GET['source'];
}else{
    $source = "";
}

switch ($source) {
case "add_post":
include "controller/add_post.php";
break;
case "posts_table":
include "controller/posts_table.php";
break;
case "categories_table":
include "controller/categories_table.php";
break;
case "post":
include "controller/post.php";
break;       
default:
include "controller/display_approved_posts.php";
}