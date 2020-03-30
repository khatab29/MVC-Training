
    
   
    
    
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="Posts_search.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name = "blog_search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit_search">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                        </form>
                </div>  
<?php 
use Controllers\Categorys;         
$categorys = categorys::category();
include "app/views/sidebar_categorys.php";
          