<?php

require_once '../main/function.php';

$table = 'bus';
$show = showAllData($table);


require_once '../template/sidebar.php';

?>

<div class="pagetitle">
  <h1>Kelas Bus</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
      <li class="breadcrumb-item active">Kelas Bus</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row row-cols-3 row-cols-md-4">
    <?php
    $number = 1;
    foreach ($show as $r) { ?>
      <div class="card-group" style="margin-top: 15px;">
        <div class="card">
          <img car src="../gambar/<?php echo $r["gambar"] ?>" class="card-img-top">
          <img car src="../gambar/<?php echo $r["gambar2"] ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $r["kelas"] ?></h5>
          </div>
        </div>
        <!-- End Card with an image on top -->
      </div>
    <?php }; ?>
  </div>

</section>
<!-- End Services Section -->

<?php require_once '../template/footer.php' ?>