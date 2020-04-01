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
<?php
  // get and display all categorys                    
foreach($all_categories as $categories){ ?> 
               <tr>
               <td><?= $categories['id'] ?></td>
               <td><?= $categories['title'] ?></td>
               <td><a href = "categories.php?delete=<?= $categories["id"] ?>" onClick = "return confirmation();">Delete</a></td>
               <td><a href = "categories.php?edit=<?= $categories['id'] ?>">Edit</a></td>
               </tr>  
<?php } ?>
               </tbody>
               </table>
               </div>   
<script>
function confirmation(){
var x = confirm("Delete <?= $categories["title"] ?> From Table ? ");
if(x == true){
return true;
}else{
return false;
}
}
</script>

 <div class="col-xs-6">
     <form action="" method="post">
        <div class="form-group">
        <label for="cate_title"> Add Categorey</label>
        <input type="text" class="form-control" name="new_categorey">
        </div>
        <div class="form-group">
        <input class="btn btn-primary" type="submit" name="add_categorey" value="Add Categorey">
        </div>
        </form>
<?php 
use Controllers\Categorys;
  //add new category
if(isset($_POST['add_categorey'])){
    
    $new_categorey = filter_var($_POST['new_categorey'], FILTER_SANITIZE_STRING);
    
    if(empty($new_categorey)){

    echo "<div class='alert alert-danger alert-dismissible'>
          <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>This Field Can't Be empty!</strong>
          </div>";
    }else{
    $add_category = categorys::create_category($new_categorey); 
    header("location: categories.php");
        
    }
    }                       

?>   
                    <form action="" method="post">
<?php
 //edit category id                      
if(isset($_GET['edit'])){
$cate_id = $_GET['edit'];
 //get category to be edited
$category = categorys::get_edit_category($cate_id);

    
    echo "    <div class='form-group'>
                    <label for='cate_title'> Edit Categorey</label>
                    <input type='text' class='form-control' name='new_cate' value = {$category['title']}>
                    </div>
                    <div class='form-group'>
                    <input class='btn btn-primary' type='submit' name='edit_categorey' value='Update Categorey' onClick = 'return confirming();'>
                    </div>";
    //update category
if(isset($_POST['edit_categorey'])){
$new_category = filter_var($_POST['new_cate'], FILTER_SANITIZE_STRING);
    
if(empty($new_category)){
  echo  "<h3 class='text-center'>This Field Can't be empty</h3> ";
}else{
$edit_category = categorys::update_category($cate_id, $new_category);
header("location: categories.php");
}
} 
}
?>
 <!--  edit confirmation -->                       
<script>
function confirming(){
var y= confirm("Edit <?php echo $catetitle; ?> ? ");
if(y == true){
return true;
}else{
return false;
}
}
</script>
                    </form>
                    </div>
                
                
                
                
                
                
                
                
                












































    
    
    