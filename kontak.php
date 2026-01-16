<?php include 'partials/header.php'; ?>
<?php include 'partials/menu.php'; ?>

<?php 
    require_once "config.php";

    $data = [];
    $q = mysqli_query($conn, "SELECT jenis_alamat, alamat FROM kontak");
    if ($q) {
      while ($row = mysqli_fetch_assoc($q)) {
        $data[$row['jenis_alamat']] = $row['alamat'];
      }
    }
    
    $fb = $data['FB'] ?? '';
    $ig = $data['IG'] ?? '';
    $tw = $data['TW'] ?? '';
    $tt = $data['TT'] ?? '';

?>


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="text-center">
                <h2>Kontak</h2>
                <p>Silakan hubungi saya lewat info di bawah ini.</p>
            </div>
            
            <hr>

            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="fw-bold">Alamat Rumah</div>
                        <div class="text-muted">Isi alamat kamu di sini</div>
                    </div>
                    <div class="mb-3">
                        <div class="fw-bold">WhatsApp</div>
                        <a class="text-decoration-none" href="https://wa.me/6281234567890" target="_blank">
                            0812-3456-7890
                        </a>
                    </div>
                    <div class="mb-3">
                        <div class="fw-bold">Email</div>
                        <a class="text-decoration-none" href="mailto:emailkamu@example.com">
                            emailkamu@example.com
                        </a>
                    </div>

                    <hr>
                    
                    <div class="fw-bold">Media Sosial</div>
                        <div class="d-flex flex-wrap gap-2">
                            <a class="btn btn-outline-dark btn-sm" href="<?= htmlspecialchars($ig) ?>" target="_blank">
                                <i class="fa-brands fa-instagram me-1"></i> Instagram
                            </a>
                            <a class="btn btn-outline-primary btn-sm" href="<?= htmlspecialchars($fb) ?>" target="_blank">
                                <i class="fa-brands fa-facebook me-1"></i> Facebook
                            </a>
                            <a class="btn btn-outline-dark btn-sm" href="<?= htmlspecialchars($tt) ?>" target="_blank">
                                <i class="fa-brands fa-tiktok me-1"></i> TikTok
                            </a>
                            <a class="btn btn-outline-info btn-sm" href="<?= htmlspecialchars($tw) ?>" target="_blank">
                                <i class="fa-brands fa-x-twitter me-1"></i> Twitter/X
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
