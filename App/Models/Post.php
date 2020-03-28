<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

 
class Post extends Model {
     
    protected $table = "post";
    protected $fillable = ['category_id', 'title', 'user_id', 'image','content', 'tags', 'comment_id', 'status'];
   
    
    
    
     public function category(){
        
        return $this->belongsTo('Models\Category');
    }
    
    
    
    public function user(){
        
        return $this->belongsTo('Models\User');
    }
    
    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
}
 


   