<?php
include "start.php";
use Controllers\Categorys;
//delete category
if(isset($_GET['delete_category'])){
$cate_id = $_GET['delete_category'];
$delete_categorey = Categorys::delete_category($cate_id);
header("location: index.php?source=categories_table");
}

//add new category
$new_category = "";
$new_category_error = "";
if(isset($_POST['add_categorey'])){
$new_category = $_POST['new_categorey'];
if(empty($_POST['new_categorey'])){
$new_category_error = "This Field Can't Be Empty" ;
}else{
$new_category = filter_var($_POST['new_categorey'], FILTER_SANITIZE_STRING);
$add_category = Categorys::create_category($new_category);
}
}
//display all category
$all_categories = Categorys::category();
include "app/views/categories_table.php";

//edit category
$edited_categoty = "";
$edited_categoty_error = "";
if(isset($_GET['edit'])){
$cate_id = $_GET['edit'];
$cate_title = Categorys::get_edit_category($cate_id);  
if(isset($_POST['edit_categorey'])){
if(empty($_POST['edited_categorey'])){
$edited_categoty_error = "This Field Can't Be Empty";  
}else{
$edited_categoty = filter_var($_POST['edited_categorey'], FILTER_SANITIZE_STRING);
$update_category = Categorys::update_category($cate_id, $edited_categoty);
header("location: index.php?source=categories_table");
}

}
include "app/views/edit_category.php";
}