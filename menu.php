


<?php include 'header.php';?>
  <!-- Page Title -->
  <div class="page-title position-relative" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
      <div class="container position-relative">
        <h1>Menu <br></h1>
        <p>Check Our Tasty Menu.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Menu</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <!-- Menu Section -->
    <section id="menu" class="menu section" style="padding: 60px 0;">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div><!-- End Section Title -->
        <div class="container isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

<div class="row" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-12 d-flex justify-content-center">
        <ul class="menu-filters isotope-filters">
            <li data-filter="*" class="filter-active">All</li>
            <?php foreach ($menu as $category => $items): ?>
                <li data-filter=".filter-<?= htmlspecialchars($category) ?>"><?= htmlspecialchars($category) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div><!-- Menu Filters -->

<div class="row isotope-container" data-aos="fade-up" data-aos-delay="200">
    <?php foreach ($menu as $category => $items): ?>
        <?php foreach ($items as $item): ?>
            <div class="col-lg-6 menu-item isotope-item filter-<?= htmlspecialchars($category) ?>">
                <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#"><?= htmlspecialchars($item['name']) ?></a><span><?= htmlspecialchars($item['price']) ?></span>
                </div>
                <div class="menu-ingredients">
                    <?= empty($item['description']) ? '&nbsp;' : htmlspecialchars($item['description']) ?>
                </div>
            </div><!-- Menu Item -->
        <?php endforeach; ?>
    <?php endforeach; ?>
</div><!-- Menu Container -->

</div>

  
      </section><!-- /Menu Section -->
      <?php include 'footer.php';?>