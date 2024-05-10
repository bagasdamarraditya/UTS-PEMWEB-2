<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav sb-sidenav-dark">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="dashboard.php">
                        <i class="fas fa-chart-line me-2"></i>
                        Dashboard
                    </a>
                    <a class="nav-link" href="pasien.php">
                        <i class="fas fa-user-injured me-2"></i>
                        Pasien
                    </a>
                    <a class="nav-link" href="periksa.php">
                        <i class="fas fa-notes-medical me-2"></i>
                        Periksa
                    </a>
                    <a class="nav-link" href="paramedik.php">
                        <i class="fas fa-user-md me-2"></i>
                        Paramedik
                    </a>
                    <a class="nav-link" href="unit_kerja_id.php">
                        <i class="fas fa-building me-2"></i>
                        Unit Kerja
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const currentUrl = window.location.href;

                    // Ambil semua tautan di dalam sidebar
                    const sidebarLinks = document.querySelectorAll("#layoutSidenav_nav .nav-link");

                    // Loop melalui setiap tautan dan periksa apakah URL-nya cocok dengan URL saat ini
                    sidebarLinks.forEach(function(link) {
                        // Periksa apakah URL tautan sama dengan URL saat ini
                        if (link.href === currentUrl) {
                            // Tambahkan kelas 'active' ke tautan yang sesuai
                            link.classList.add("active");
                        }
                    });
                });
            </script>