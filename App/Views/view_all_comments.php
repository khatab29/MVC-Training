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
               <td><?= $comment_Data['status'] ?></td>
               <td><?= $comment_Data['created_at'] ?></td>
               <td><a href = "comments.php?approve=<?= $comment_Data['id'] ?>" onClick = "return Approve_confirmation();">Approve</a></td>   
               <td><a href = "comments.php?deleteComment=<?= $comment_Data['id'] ?>" onClick = "return confirmation();">Delete</a></td>
             
               </tr>  
<?php } ?>
               </tbody>
               </table>
               </div> 

<script>
function Approve_confirmation(){
var x = confirm("approve <?= $comment_Data['id'] ?> comment?! ");
if(x == true){
return true;
}else{
return false;
}
}
</script>