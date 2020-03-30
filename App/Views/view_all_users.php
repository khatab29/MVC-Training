<div class="col-xs-12">
                <table class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Id</th>
                <th>User Name</th>
                <th>Email</th>
                <th>In Response To</th>
                <th>Comment</th>
                <th>Status</th>
                <th>Date</th>
                <th>Approve</th>
                <th>Delete</th>
                <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                    
 <?php
    use Controllers\Comments;               
    foreach($comments_Data as $comment_Data){
    $userName  = comments::comment_author($comment_Data['id']);
    $userEmail = comments::comment_author_email($comment_Data['id']);
    $postTitle = comments::comment_post_title($comment_Data['id']);           
                    ?>
                                      

               <tr>
               <td><?= $comment_Data['id'] ?></td>
               <td><?= $userName ?></td>
               <td><?= $userEmail ?></td>
               <td><?= $postTitle ?></td>
               <td><?= $comment_Data['content'] ?></td> 
               <td>Draft</td>
               <td><?= $comment_Data['created_at'] ?></td>
               <td><a href = "posts.php?deletePost=" onClick = "return confirmation();">Approve</a></td>   
               <td><a href = "posts.php?deletePost=" onClick = "return confirmation();">Delete</a></td>
               <td><a href = "posts.php?editPost=">Edit</a></td>
               </tr>  
<?php } ?>
               </tbody>
               </table>
               </div>   