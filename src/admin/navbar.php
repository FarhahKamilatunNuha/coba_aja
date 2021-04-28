<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4">
    <div class="container">
        <a class="navbar-brand text-uppercase font-weight-bold" href="">Eletronik</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link <?php if ($title === 'Dashboard | Admin') echo 'active font-weight-bold' ?>" href="dashboard.php">Home</a>
                <a class="nav-item nav-link <?php if ($title === 'Barang') echo 'active font-weight-bold' ?>" href="barang.php">Semua Barang</a>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a class="btn btn-outline-danger" href="login.php">Logout</a>
        </div>
    </div>
</nav>