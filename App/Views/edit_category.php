
<form action="" method="post">
<div class="form-group">
<label for="cate_title"> Edit Categorey</label><br>
<span><?=$edited_categoty_error?></span>
<input type="text" class="form-control" name="edited_categorey" value="<?=$cate_title?>">
</div>
<div class="form-group">
<input class="btn btn-primary" type="submit" name="edit_categorey" value="Edit Categorey" onClick = "return edit_confirmation();">
</div>
</form>
</div>
<script>
function edit_confirmation(){
var x = confirm("Delete this post From Table ? ");
if(x == true){
return true;
}else{
return false;
}
}
</script>