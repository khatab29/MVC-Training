<div class="row">
            <div class="col-md-8">
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>
<?php
use Controllers\Posts;  
    if($results == 0){  
      echo "<h2 class = 'text-center'>no results found</h2>";
    }else{
      //displaying search results data
    foreach($posts as $postData){ 
    $post_author = posts::post_author($postData['id']); ?>
    

               <h2>
                 <a href="#"><?= $postData['title'] ?></a>
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
        
<?php
    }
}

?>   
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>
            
            

    