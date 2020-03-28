<div class="row">
            <div class="col-md-8">
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

<?php
     use Controllers\Posts;
     foreach($postsData as $postData){         
     $post_author = posts::post_author($postData['id']); ?> 
                
                <h2>
                    <a href="post.php?post_id=<?=$postData['id']?>"><?= $postData['title'] ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?= $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?= $postData['created_at'] ?></p>
                <hr>
                <img class="img-responsive" src="images/<?= $postData['image']; ?>" alt="">
                <hr>
                <p><?= $postData['content'] ?>.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
<?php } ?>
            </div>
            
            
            
            
            
            