<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Home</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['nama'])): ?>
        <li class="nav-item">
            <a class="nav-link" href="../logout.php" onclick="return confirm('Apakah yakin logout?')">
            Logout (<?= $_SESSION['nama'] ?>)
            </a>
        </li>
        <?php else: ?>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
        </li>
        <?php endif; ?>
    </ul>
</nav>






