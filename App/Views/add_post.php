<?php 
include "includes/header.php"; 
include "includes/navigation.php";?>

<div class="container-fluid">
    <div class="row">
<div class="col-md-8">

<form class="form-container" action="" method= "post" enctype="multipart/form-data">
  
    
    
<div class="form-group">
  <label for="title">Post Title</label><br>
  <span class="error"><?=$post_title_error?></span> 
  <input type="text" class="form-control" name="post_title" value="<?=$post_title?>">
</div>
    
    

<div class="form-group">
  <label for="category">select Category</label>
  <select class="form-control" name="post_cate"> 
  <?php foreach($categorys_data as $category_data):?>
  <option value= "<?=$category_data['id']?>"><?=$category_data['title']?></option>
  <?php endforeach ?>  
  </select> 
</div>

    
    
<div class="form-group">
  <label for="author">Post Author</label><br>
  <span class="error"><?=$post_author_error?> </span>
  <input type="text" class="form-control" name="post_author"  value="<?=$post_author?>">
</div>

    
    

<div class="form-group">
  <label for="image">Post Image</label>
   <span class="error"><?=$post_image_error?> </span> 
  <input type="file" class="form-control" name="post_image" value="<?=$post_image?>">
</div>

    
    
<div class="form-group">
  <label for="content">Post Content</label><br>
  <span class="error"><?=$post_content_error?></span>
  <textarea class="form-control" name="post_content" cols="30" rows="10"><?=$post_content?></textarea>
</div>

    
    
<div class="form-group">
  <input type="submit" class="btn btn-primary" name="upload_post" value="Add Post">
</div>
</form>


</div>
</div>
</div>

<?php include "includes/footer.php";?>



