<?php
namespace Controllers;
use Models\Comment;

class Comments{
    
        //get comments table data
     public function all_comments_data(){
        $all_comments = Comment::get(['id','post_id', 'user_id', 'content','status','created_at']);
            return $all_comments;
        
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