<?php
namespace Controllers;
use Models\Category;

class Categorys{
    
    
       //all categories titles
    public function category(){
        $all_categorys = category::get(['id','title']);
            return $all_categorys;
    }
    
     public function post_cate_title($id){
        $cate = category::where('id', '=', $id)->first();
          return $cate->title;
    }
    
    
    
       //add new category to database
    public function create_category($new_category){
        $cate = category::create(['title'=>$new_category]);
            return $cate; 
       }
    
    
    
        //delete category from admin table
    public function delete_category($category_id){ 
        $delete_category = category::find($category_id)->delete();
        
    }
    
    
       //update categories in categories table 
    public function update_category($cateID, $newCategory){
        $select_category = category::find($cateID);
        $select_category->title = $newCategory;
        $select_category->save(); 
    }
    
        //
    public function get_edit_category($cateID){
       $select_category = category::where('id', $cateID)->first();
        return $select_category->title;
    }
    
    
    
    public function post_cate_id($cate_title){
        $cate_id = category::where('title', '=', $cate_title)->first();
          return $cate_id->id;
    }
    
    
    
    /*
        //get cate_title based on post_category_id in posts table   
    public function post_category_title($postCategory){
        $post_category = category::where('cate_id', '=' , $postCategory)->get();
            return $post_category;
    }

       */
    
    
    
    
    
    
}