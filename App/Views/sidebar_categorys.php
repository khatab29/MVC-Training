
<div class="well">
<h4>Blog Categories</h4>
<div class="row">
<div class="col-lg-6">
<ul class="list-unstyled">

<?php
//display all category titles                            
foreach($categorys as $category){?>
<li>
<a href="index.php?cate-id=<?= $category['id'] ?>"><?= $category['title'] ?></a>
</li>
<?php } ?>
</ul>
</div>
</div>
</div>



