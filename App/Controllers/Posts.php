<?php 
namespace Controllers;
use Models\Post;

    class Posts {



        //get all posts data
    public function get_posts(){
        $all_posts = post::get(['id', 'title','category_id', 'user_id', 'image', 'content', 'comment_id', 'created_at']);;
        return $all_posts;
    }
        
        
        
        //get post username from user table
    public function post_author($id){
            $author = post::find($id);
            return $author->user->username;
    }
    
        
        
    public function post_category($id){
            $post_cate_title = post::find($id);
             return $post_cate_title->category->title;
    }
        
        
        
        
    public function resultCheck($blogsearch){
        $search_posts = post::Where('tags', 'like', '%'.$blogsearch.'%')->exists();
        return $search_posts;
    }


        // search posts index.php sidebar query
    public function searchBlog($blogsearch){
        $search_posts = post::Where('tags', 'like', '%'.$blogsearch.'%')->get();
        return $search_posts;
    }
        
        
    


        //upload new post query
    public function upload_post($post_cate, $post_title, $post_author, $post_image, $post_content ,$post_comment_count, $post_status, $tags){
                                   

        $add_post = post::create(['category_id'=>$post_cate,'title'=>$post_title, 'user_id'=>$post_author, 'image'=>$post_image, 
                                  'content'=>$post_content,'comment_id'=>$post_comment_count,'status'=>$post_status, 'tags'=>$tags]);
                                  
                                  
    }

/*

        //delete post query
    public function delete_post($post_id){

        $remove_post = post::find($post_id)->delete();
        
    }



        //update post query
    public function update_post($edit_post_id, $new_post_title, $new_post_cate, $new_post_author, 
                                $new_post_status, $new_post_image, $new_post_tags,  $new_post_content 
                                ){


        $updatePost = post::find($edit_post_id);
        $updatePost ->post_auther           = $new_post_author; 
        $updatePost->post_title             = $new_post_title;
        $updatePost->post_cate_id           = $new_post_cate;
        $updatePost->post_status            = $new_post_status;
        $updatePost->post_image             = $new_post_image ;
        $updatePost->post_tags              = $new_post_tags;
        $updatePost->post_comment_count     = '5';
        $updatePost->post_date              = date('d-m-y');
        $updatePost->post_content           = $new_post_content;
        $updatePost->save();

    }




        //display post in post.php page query
    public function posts($postId){
        $post = post::find($postId);
        return $post;
    }



        //display post based on categorey in post.php page query   
    public function post_category($post_categoryId){
          $post_category = post::where('post_cate_id', '=' , $post_categoryId)->get();
          return $post_category;
    }
      
        
        
        //get post title based on comment_post_id---view_all_comments.php    
    public function get_comment_post_title($commentPostID){
        $post_data = post::find($commentPostID);
        return $post_data;
        
    }
        */
        
        
    



   

    
    
    
}



 
    
     
    
    
    

     
    
   
    
    
    


