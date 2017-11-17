<?php 
  foreach ($getStock as $thisQuery) {
    $title = ucfirst($thisQuery["title"]);
    $descr = ucfirst($thisQuery["descr"]);
    $categ = ucfirst($thisQuery["categ"]);
?>
<section id="stock" class="content-section stockitem text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <?= "<h2>".$title."</h2>"."<p>".$descr."</p>"."<small>".$categ."</small>" ?>
      </div>
    </div>
  </div>
</section>
<?php } ?>