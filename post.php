<?php
include "includes/header.php"; 
include "includes/navigation.php";


use Controllers\Posts;
$postsData = Posts::post($_GET['post_id']);
include "app/views/PostsDisplay.php";



include "includes/sidebar.php";
include "includes/widget.php";
include "includes/comments.php";
include "includes/footer.php"; ?>
