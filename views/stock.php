<header class="masthead">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="brand-heading">Mon stock</h1>
                    <a href="#about" class="btn btn-circle js-scroll-trigger">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section -->

            
 <?php 
  foreach ($getStock as $thisQuery) {
    $title = ucfirst($thisQuery["title"]);
    $descr = ucfirst($thisQuery["descr"]);
    $categ = ucfirst($thisQuery["categ"]);
    ?>
<section class="content-section stockitem text-center">
<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
<?php
    echo "<h2>".$title."</h2>"."<p>".$descr."</p>"."<small>".$categ."</small>";
?>
        </div>
      </div>
    </div>
</section>
<?php } ?>