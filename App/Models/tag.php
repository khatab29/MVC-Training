<?php
 
namespace Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 




class tag extends Model {
    use SoftDeletes;
    protected $table    = "tags";
    protected $fillable = ['name'];
  
     
    
    
    public function posts(){
        
       return $this->belongsToMany('Models\Post');
    }
    
    
    
}
 
