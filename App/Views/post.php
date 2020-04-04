<?php 
include "includes/header.php"; 
include "includes/navigation.php";?>

<div class="col-lg-8">
<h1><?=$post_data['title']?></h1>
<p class="lead">
by <a href="#"><?=$post_data['username']?></a>
</p>
<p><span class="glyphicon glyphicon-time"></span> Posted on <?=$post_data['created_at']?></p>
<hr>
<img class="img-responsive" src="images/<?=$post_data['image']?>" alt="">
<hr>
<p class="lead"><?=$post_data['content']?>.</p>
<hr>
    
    

<div class="well">
<h4>Leave a Comment:</h4><br>
    <span><?=$comment_error?></span>
<form role="form" method="post">
<div class="form-group">
<textarea class="form-control" rows="3" name="comment"></textarea>
</div>
<button type="submit" class="btn btn-primary" name="add_comment">Submit</button>
</form>
</div>

<hr>

<?php foreach($post_comments as $comment): ?>
<div class="media">
<a class="pull-left" href="#">
<img class="media-object" src="http://placehold.it/64x64" alt="">
</a>
<div class="media-body">
  
<h4 class="media-heading"><?=$comment['username']?><br>
<small><?=$comment['created_at']?></small>
</h4>
<?=$comment['content']?>.
   
</div>
</div>
 <?php endforeach ?>   

</div>

<?php include "includes/footer.php"; ?>
