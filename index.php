<!doctype html>
<html lang="en">
<?php include "frontend/component/header.php";?>
<body>
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<?php include "frontend/component/navbar.php";?>

	<?php
    if (!empty($_GET['page'])) {
    $page = "frontend/" . $_GET['page'] . ".php";
    if (file_exists($page)) {
        include_once($page);
    } else {
        echo "<h3 class='text-center text-danger mt-5'>Halaman tidak ditemukan!</h3>";
    }
    } else {
        include "frontend/home.php";
    }
    ?>

	<?php include "frontend/component/footer.php";?>

    <!-- Bootstrap Bundle (JS + Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tiny Slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
    <!-- Flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- AOS (Animate on Scroll) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- GLightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/glightbox.min.js"></script>
    <!-- Navbar custom -->
    <script src="frontend/assets/js/scripts.js"></script>
    <!-- Counter (animasi angka) -->
    <script src="frontend/assets/js/anime.js"></script>
    <!-- Custom JS -->
    <script src="frontend/assets/js/custom.js"></script>
</body>
</html>
