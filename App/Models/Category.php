<?php
 
namespace Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 




class Category extends Model {
    use SoftDeletes;
    protected $table    = "categorys";
    protected $fillable = ['title'];
  
     
    
    
    public function posts(){
        
       return $this->hasMany('Models\Post');
    }
    
    
    
}
 
