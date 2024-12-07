
<?php include 'header.php';?>
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/gallery/gallery-1.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start  text-h">
            <h2 data-aos="fade-up" data-aos-delay="100">Welcome to <span><?= $client['name'] ?></span></h2>
            <p data-aos="fade-up" data-aos-delay="200">Delivering great food for more than 18 years!</p>
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
              <a href="menu.php" class="cta-btn">Our Menu</a>
              <a href="location.php" class="cta-btn"><i class="bi bi-geo-alt flex-shrink-0"></i>Location</a>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-center mt-5 mt-lg-0">
          <a href="https://wa.me/<?= $client['phone'] ?>?text=Hello%20there!" target="_blank" class="pulsating-whatsapp-btn">
              <i class="bi bi-whatsapp"></i>
            </a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

  

    <!-- Specials Section -->
    <section id="specials" class="specials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Specials</h2>
        <p>Check Our Specials</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
        <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
                <?php $first = true; // متغير لتحديد العنصر الأول ?>
                <?php foreach ($specialmenu_data as $specialy => $items): ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $first ? 'active show' : '' ?>" data-bs-toggle="tab" href="#<?= htmlspecialchars($specialy) ?>">
                            <?= htmlspecialchars($specialy) ?>
                        </a>
                    </li>
                    <?php $first = false; // بعد أول عنصر، تعيين $first إلى false ?>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
                <?php $first = true; // إعادة تعيين المتغير لاستخدامه في المحتوى ?>
                <?php foreach ($specialmenu_data as $specialy => $items): ?>
                    <?php foreach ($items as $item): ?>
                        <div class="tab-pane <?= $first ? 'active show' : '' ?>" id="<?= htmlspecialchars($specialy) ?>">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3><?= htmlspecialchars($item['type']) ?></h3>
                                    <p class="fst-italic"><?= htmlspecialchars($item['name']) ?></p>
                                    <p><?= htmlspecialchars($item['description']) ?></p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="<?= htmlspecialchars($item['img']) ?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <?php $first = false; // بعد أول عنصر، تعيين $first إلى false ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>


      </div>

    </section><!-- /Specials Section -->



<<<<<<< HEAD
=======

>>>>>>> bfa5267f773266fcef980273033bf120787e5428

    <?php include 'footer.php';?>
