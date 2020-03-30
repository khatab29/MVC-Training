<?php
 
namespace Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 




class Comment extends Model {
    use SoftDeletes;
    protected $table    = "comment";
    protected $fillable = ['post_id', 'user_id', 'content', 'status'];
  
     
    
    public function post(){
        
        return $this->belongsTo('Models\Post');
    }
    
    
     
    public function user(){
        
        return $this->belongsTo('Models\User');
    }
    
    
    
    
    
}
 
