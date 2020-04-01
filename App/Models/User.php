<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class User extends Model {
     
    protected $table    = "users";
    protected $fillable = ['username', 'password', 'firstname', 'lastname', 'email', 'image'];

    
    
    
    
    
    
    public function posts(){
        
       return $this->hasMany('Models\Post');
    }
    
    
    public function comments(){
        
       return $this->hasMany('Models\Comment');
    }
    
}
 
?>