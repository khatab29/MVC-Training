<?php
use Controllers\Users;
$email = $Password = "";
$email_error = $Password_error = $valied_user_error = "";
if(isset($_POST['login'])){
    if(empty($_POST['email'])){
        $email_error = "Please Enter Your Email";
    }else{
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    }
    if(empty($_POST['password'])){
        $Password_error = "Please Enter Your Password";
    }else{
        $Password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    }

}

if($email && $Password){
 $user_check = users::valied_users_check($email, $Password);
    if($user_check == 0){
        $valied_user_error = "Please Enter A Valied Email & Password";
    }else{
        $valied_user = users::valied_user($email, $Password);
        
    }
}
?>




<div class="col-md-4"> 
<div class="well">
                     <span><?=$valied_user_error?></span>
                    <h4 class="text-center">Sign In</h4>
                    <form action="" method="post">
                    <div class="form-group">
                        <?= $email_error?>
                        <input type="email" class="form-control" name = "email" placeholder="Email" value="<?= $email?>">
                    </div>
                         <div class="form-group">
                             <?= $Password_error?>
                        <input type="password" class="form-control" name = "password" placeholder="Password">
                    </div>
                       <div class="form-group">
                       <input type="submit" class="btn btn-primary" name="login" value="Log In">
                           </div>
                        </form>
                </div>  