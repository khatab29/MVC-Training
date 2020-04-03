<?php 
include "includes/header.php"; 
include "includes/navigation.php";?>
<div class="col-xs-12">
<table class="table table-bordered table-hover table-container">
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
<?php foreach($posts_Data as $post_Data): ?>
<tr>
<td><?= $post_Data['id'] ?></td>
<td><?= $post_Data['author_name'] ?></td>
<td><?= $post_Data['title'] ?></td>
<td><?= $post_Data['category_title'] ?></td>
<td><?= $post_Data['status'] ?></td>
<td><img src = "images/<?=$post_Data['image']?>" width="100"></td>
<td><?= $post_Data['content'] ?></td>   
<td><?= $post_Data['comment_count'] ?></td>
<td><?= $post_Data['created_at'] ?></td>
<td><a href = "index.php?source=posts_table&&deletePost=<?= $post_Data['id'] ?>" onClick = "return confirmation();">Delete</a></td>
<td><a href = "index.php?source=posts_table&&approve=<?= $post_Data['id'] ?>">Approve</a></td>
</tr>  
<?php endforeach ?>
</tbody>
</table>
</div>  
<script>
function confirmation(){
var x = confirm("Delete  From Table ? ");
if(x == true){
return true;
}else{
return false;
}
}
</script>
<?php include "includes/footer.php";?>
