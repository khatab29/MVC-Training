<?php
use Controllers\Posts;
use Controllers\Users;
use Controllers\Categorys;

$title = $author = $image = $content = "";
$title_error = $author_error = $image_error = $content_error = "";
if(isset($_POST['upload_post'])){
    
    
   if(empty($_POST['title'])){
       $title_error = "this field can't be empty";
   }else{
       $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
   }
    
    if(empty($_POST['post_author'])){
       $author_error = "this field can't be empty";
   }else{
       $author = filter_var($_POST['post_author'], FILTER_SANITIZE_STRING);
   }
 
    
    if(empty($_POST['post_content'])){
       $content_error = "this field can't be empty";
   }else{
       $content = filter_var($_POST['post_content'], FILTER_SANITIZE_STRING);
   }
    
    
    $category       = $_POST['post_cate'];
    $post_image     = $_FILES['post_image']['name'];
    $post_image_tmp = $_FILES['post_image']['tmp_name'];
    $cate_title = categorys::post_cate_title($category);
    $tags = $title.",".$author.",".$cate_title;
    $user_id = users::post_user_id($author);
    $upload_posts =  posts::upload_post($category, $title, $user_id, $post_image, $content ,"5" , "draft", $tags);
     
    
    move_uploaded_file($post_image_tmp, "../images/{$post_image}");
    

    
    
    
}



?>
 



<form action="" method= "post" enctype="multipart/form-data">
  
<div class="form-group">
  <label for="title">Post Title</label><br>
    
    <span class="error"> <?= $title_error ?></span>
    
    
  <input type="text" class="form-control" name="title" value="<?=$title?>">
</div>

<div class="form-group">
  <label for="category">select Category</label>
  <select class="form-control" name="post_cate"> 
      
      <?php
        
        $select_category = categorys::category();
        foreach($select_category as $category_data){?>
        <option value= "<?=$category_data['id']?>" ><?=$category_data['title']?></option>
<?php } ?>

      </select> 
</div>

<div class="form-group">
  <label for="author">Post Author</label><br>
    <span class="error"> <?= $author_error ?></span>
    
  <input type="text" class="form-control" name="post_author"  value="<?=$author?>">
</div>


<div class="form-group">
  <label for="image">Post Image</label>
    
  <input type="file" class="form-control" name="post_image" value="<?=$image?>">
</div>

<div class="form-group">
  <label for="content">Post Content</label><br>
    <span class="error"><?= $content_error ?></span>
    
  <textarea class="form-control" name="post_content" cols="30" rows="10"><?=$content?></textarea>
</div>

<div class="form-group">
  <input type="submit" class="btn btn-primary" name="upload_post" value="Add Post">
</div>
</form>


        

