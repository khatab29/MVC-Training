<div class="col-xs-12">
                <table class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Title</th>
                <th>Category</th>
                <th>Status</th>
                <th>Image</th>
                <th>Content</th>
                <th>Comments</th>
                <th>Date</th>
                <th>Delete</th>
                <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                    
 <?php
    use Controllers\Posts;               
    foreach($posts_Data as $post_Data){
    $post_author = posts::post_author($post_Data['id']);               
    $post_category = posts::post_category($post_Data['id']);              
                    ?>
                                      

               <tr>
               <td><?= $post_Data['id'] ?></td>
               <td><?= $post_author ?></td>
               <td><?= $post_Data['title'] ?></td>
               <td><?= $post_category ?></td>
               <td>Draft</td>
               <td><img src = "../images/<?=$post_Data['image']?>" width="100"></td>
               <td><?= $post_Data['content'] ?></td>   
               <td><?= $post_Data['comment_id'] ?></td>
               <td><?= $post_Data['created_at'] ?></td>
                   
               <td><a href = "posts.php?deletePost=<?= $post_Data['id'] ?>" onClick = "return confirmation();">Delete</a></td>
               <td><a href = "posts.php?editPost=<?= $post_Data['id'] ?>">Edit</a></td>
               </tr>  
<?php } ?>
               </tbody>
               </table>
               </div>   