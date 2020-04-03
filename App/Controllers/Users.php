<?php
namespace Controllers;
use Models\User;

class Users{
    
    
    
       //get post user_id
    public function post_user_id($username){
        $users = user::where('username', '=', $username)->first();
          return $users->id;
    }
    
    
   /* 
       //find or create new user (it creats a new user but doen't upload the post " fatal error foreign key constraint fails!!!")
    public function post_user($username){
        $users_id = user::firstOrCreate(['username' => $username]);
        return $users_id;
    
    }
    
    */
    
    //check if users exists in data base
    public function valied_users_check($username, $password){
        $users_check = user::where([['email',$username], ['password',$password]])->exists();
          return $users_check;
    }
    
    
    public function valied_user($username, $password){
        $valied_user = user::where([['email',$username], ['password',$password]])->first();
          return $valied_user;
    }
    
    
    
    
    
    
    
    
    
    
   /* 
    
        //delte user query
    public function delete_user($user_id){
        $deleteUser = user::find($user_id)->delete();
    }
    
    
      
       //get edite user data query
    public function get_user_data($userID){
        $userData = user::find($userID);
        return $userData;
    }
    
      */
    
    
}