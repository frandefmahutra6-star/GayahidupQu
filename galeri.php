<?php include 'partials/header.php'; ?>
<?php include 'partials/menu.php'; ?>

<div class="container py-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold">Galeri Ku</h2>
    <p class="text-muted mb-0">Kumpulan foto sederhana.</p>
  </div>

  <!-- Grid cards (Bootstrap 5) -->
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

    <?php
      // Daftar gambar (contoh)
      $items = [
        ["title" => "Foto 1", "src" => "assets/1.jpg"],
      ];
    ?>

    <?php foreach ($items as $i => $it): 
      $modalId = "galleryModal" . $i;
    ?>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img
            src="<?= htmlspecialchars($it["src"]) ?>"
            class="card-img-top"
            alt="<?= htmlspecialchars($it["title"]) ?>"
            style="height: 180px; object-fit: cover;"
          >
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <div class="fw-bold"><?= htmlspecialchars($it["title"]) ?></div>
            </div>

            <!-- Button trigger modal -->
            <button
              type="button"
              class="btn btn-outline-info btn-sm"
              data-bs-toggle="modal"
              data-bs-target="#<?= $modalId ?>"
            >
              Lihat
            </button>
          </div>
        </div>
      </div>

      <!-- Modal (Bootstrap 5) -->
        <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body p-0 position-relative">
                        <img
                        src="<?= htmlspecialchars($it["src"]) ?>"
                        alt="<?= htmlspecialchars($it["title"]) ?>"
                        class="img-fluid w-100"
                        >
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

  </div>
</div>

<?php include 'partials/footer.php'; ?>
