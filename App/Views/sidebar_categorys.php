
<div class="col-md-4">

                <!-- Blog Search Well -->
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
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                
<?php
//display all category titles                            
foreach($categorys as $category){?>
<li><a href="#"><?= $category['title'] ?></a>
</li>
<?php } ?>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

               

