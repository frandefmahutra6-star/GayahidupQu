<?php include 'partials/header.php'; ?>
<?php include 'partials/menu.php'; ?>

<div class="container py-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold">Ceritaku Ku</h2>
    <p class="text-muted mb-0">Kumpulan Ceritaku.</p>
  </div>

  <!-- Grid cards (Bootstrap 5) -->
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

    <?php
      // Daftar gambar (contoh)
      $items = [
        ["judul" => "kucing", "src" => "assets/cerita/kucing.jpeg", "konten" => "Setiap pagi, sebelum pintu dibuka, Miko selalu duduk di depan jendela besar, memperhatikan orang-orang yang lewat dengan tatapan tenangnya. Tugas kesukaan Miko adalah menemani para pengunjung yang sedang membaca di pojok ruangan yang sunyi. Ia tidak pernah mengeong keras; ia hanya akan mendekat, mendengkur halus, dan meringkuk di samping kaki mereka."],
        ["judul" => "ayam", "src" => "assets/cerita/ayam.jpg", "konten" =>"Setiap subuh tiba Kiko selalu berdiri di atas pagar kayu yang paling tinggi dengan dada membusung penuh rasa percaya diri. Dia menarik napas dalam-dalam lalu mengeluarkan suara kokokannya yang paling lantang hingga menggema ke seluruh pelosok lembah. Suaranya begitu merdu dan bertenaga sehingga para petani tidak lagi membutuhkan alarm dari ponsel mereka untuk memulai aktivitas di sawah."],
        ["judul" => "kancil", "src" => "assets/cerita/kancil.jpg", "konten" => "Setiap pagi, sebelum pintu dibuka, Miko selalu duduk di depan jendela besar, memperhatikan orang-orang yang lewat dengan tatapan tenangnya. Tugas kesukaan Miko adalah menemani para pengunjung yang sedang membaca di pojok ruangan yang sunyi. Ia tidak pernah mengeong keras; ia hanya akan mendekat, mendengkur halus, dan meringkuk di samping kaki mereka."],
        ["judul" => "ayam", "src" => "assets/cerita/musang.jpg", "konten" =>"Setiap subuh tiba Kiko selalu berdiri di atas pagar kayu yang paling tinggi dengan dada membusung penuh rasa percaya diri. Dia menarik napas dalam-dalam lalu mengeluarkan suara kokokannya yang paling lantang hingga menggema ke seluruh pelosok lembah. Suaranya begitu merdu dan bertenaga sehingga para petani tidak lagi membutuhkan alarm dari ponsel mereka untuk memulai aktivitas di sawah."],
        ["judul" => "kucing", "src" => "assets/cerita/lebah.jpg", "konten" => "Setiap pagi, sebelum pintu dibuka, Miko selalu duduk di depan jendela besar, memperhatikan orang-orang yang lewat dengan tatapan tenangnya. Tugas kesukaan Miko adalah menemani para pengunjung yang sedang membaca di pojok ruangan yang sunyi. Ia tidak pernah mengeong keras; ia hanya akan mendekat, mendengkur halus, dan meringkuk di samping kaki mereka."],
        ["judul" => "ayam", "src" => "assets/cerita/buaya.jpg", "konten" =>"Setiap subuh tiba Kiko selalu berdiri di atas pagar kayu yang paling tinggi dengan dada membusung penuh rasa percaya diri. Dia menarik napas dalam-dalam lalu mengeluarkan suara kokokannya yang paling lantang hingga menggema ke seluruh pelosok lembah. Suaranya begitu merdu dan bertenaga sehingga para petani tidak lagi membutuhkan alarm dari ponsel mereka untuk memulai aktivitas di sawah."],
        
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
            alt="<?= htmlspecialchars($it["judul"]) ?>"
            style="height: 180px; object-fit: cover;"
          >
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <div class="fw-bold"><?= htmlspecialchars($it["judul"]) ?></div>
              <small class="text-muted">Klik untuk lihat</small>
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
                        alt="<?= htmlspecialchars($it["judul"]) ?>"
                        class="img-fluid w-100"
                        >
                        <p><?= htmlspecialchars($it["konten"]) ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

  </div>
</div>

<?php include 'partials/footer.php'; ?>
