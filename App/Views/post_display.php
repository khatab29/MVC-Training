<?php 
include "includes/header.php"; 
include "includes/navigation.php";?>
<div class="col-md-8">
<?php foreach($posts_Data as $post_Data): ?>
<h1 class="page-header">
Page Heading
<small>Secondary Text</small>
</h1>
<h2>
<a href="#"><?=$post_Data['title']?></a>
</h2>
<p class="lead">
by <a href="index.php"><?=$post_Data['author_name']?></a>
</p>
<p><span class="glyphicon glyphicon-time"></span> Posted on <?=$post_Data['created_at']?></p>
<hr>
<img class="img-responsive" src="images/<?=$post_Data['image']?>" alt="">
<hr>
<p><?=$post_Data['content']?>.</p>
<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
<hr>
<?php endforeach ?>
</div>
<?php
include "includes/sidebar.php";
include "includes/footer.php";
?>
