<?php
namespace Controllers;
use Models\Comment;

class Comments{
    
        //get comments table data
     public function all_comments_data(){
        $all_comments = Comment::get(['id','post_id', 'user_id', 'content','status','created_at']);
            return $all_comments;
        
    }
    
    public function upload_comment($post_id, $post_user_id, $content){
        $upload_comment = Comment::create(['post_id'=>$post_id, 'user_id'=>$post_user_id, 'content'=>$content]);
    }
    
    
       //get posts comments
    public function get_post_comment($post_id){
        $post_comment = Comment::where('post_id',$post_id )->get();
        return $post_comment;
    }
    
       //get comment username from user table
     public function comment_author($id){
        $author = Comment::find($id);
        return $author->user->username;
    }
    
       //get comment user email from user table
     public function comment_author_email($id){
        $author_email = Comment::find($id);
        return $author_email->user->email;
    }
    
       //get comment post tilte from post table
     public function comment_post_title($id){
        $post_title = Comment::find($id);
        return $post_title->post->title;
    }
    
    
    public function get_approve_comment($comment_id, $approved){
        $approve = Comment::find($comment_id);
        $approve->status = $approved;
        $approve->save();
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}