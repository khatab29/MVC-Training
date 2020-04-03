<?php 
include "includes/header.php"; 
include "includes/navigation.php";?> 
<div class="col-xs-6">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>Id</th>
<th>Category Title</th>
<th>Delete</th>
<th>Edit</th>         
</tr>
</thead>
<tbody>                                      
<?php foreach($all_categories as $categories): ?> 
<tr>
<td><?= $categories['id'] ?></td>
<td><?= $categories['title'] ?></td>
<td><a href = "index.php?source=categories_table&&delete_category=<?= $categories["id"] ?>" onClick = "return delete_confirmation();">Delete</a></td>
<td><a href = "index.php?source=categories_table&&edit=<?= $categories['id'] ?>">Edit</a></td>
</tr>  
<?php endforeach ?>
</tbody>
</table>
</div> 
<script>
function delete_confirmation(){
var x = confirm("Delete this From Table ? ");
if(x == true){
return true;
}else{
return false;
}
}
</script>
<div>
<div class="col-xs-6">
     <form action="" method="post">
        <div class="form-group">
        <label for="cate_title"> Add Categorey</label><br>
        <span><?=$new_category_error?></span>
        <input type="text" class="form-control" name="new_categorey" value="<?=$new_category?>">
        </div>
        <div class="form-group">
        <input class="btn btn-primary" type="submit" name="add_categorey" value="Add Categorey">
        </div>
        </form>
