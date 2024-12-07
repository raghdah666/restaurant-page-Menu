
</main>

<footer id="footer" class="footer">

  <div class="container footer-top">
  <div class="col-lg-2 col-md-6 footer-about">
        <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/stylized_leaf_ic_2light.png" class="sitename" style=" max-height: 90px; margin-right: 8px;">
        </a>

      </div>
    <div class="row gy-4">


      <div class="col-lg-6 col-md-6 footer-links">
      <p class="mt-3"><strong>Address: <?= $client['address'] ?></strong></p>
      </div>
      
      <div class="col-lg-6 col-md-6 footer-newsletter">
      <p class="mt-3"><strong>Opening Hours: </strong><a href="mailto:<?= $client['opening_hours'] ?>" class="text-white"><span> <?= $client['email'] ?></span></a></p>
     </div>
     
      <div class="col-lg-6 col-md-6 footer-links">
      <p class="mt-3"><strong>Phone: </strong> <a href="tel:<?= $client['phone'] ?>" class="text-white"><span> <?= $client['phone'] ?></span></a></p>
      </div>

      <div class="col-lg-6 col-md-6 footer-newsletter">
      <p class="mt-3"><strong>Email: </strong><a href="mailto:<?= $client['email'] ?>" class="text-white"><span> <?= $client['email'] ?></span></a></p>
     </div>      


    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename"><?= $client['name'] ?></strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you've purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      Designed by <a href="#">Raghdah zaki</a>
    </div>
  </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/script.js"></script>
  
</body>

</html>
