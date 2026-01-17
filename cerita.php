<?php include 'partials/header.php'; ?>
<?php include 'partials/menu.php'; ?>

<div class="container py-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold">Cerita Ku</h2>
    <p class="text-muted mb-0">Kumpulan Ceritaku</p>
  </div>

  <!-- Grid cards (Bootstrap 5) -->
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

    <?php
      // Daftar gambar (contoh)
      $items = [
        ["judul" => "Si Kancil", "src" => "assets/1.jpg", "konten"=> "Dongeng si Kancil memang sangat digemari tua dan muda. Dongeng fabel dengan tokoh utama si Kancil yang cerdik ini selalu bisa menghibur pembacanya. Karakter si Kancil yang banyak akal membuat jalan cerita jadi menarik dan membuat penasaran. Dalam beberapa dongeng, Si Kancil selalu dicari ketika ada masalah yang perlu dipecahkan."],
        ["judul" => "Kura-kura", "src" => "assets/img/galeri/2.jpg", "konten" => "Di sebuah hutan yang tenang dan damai, hiduplah seorang kura-kura yang sangat pemalu. Ia bernama Kuri, dan ia memiliki cangkang yang indah berwarna hijau zamrud. Kuri selalu merasa tidak nyaman dan takut berinteraksi dengan hewan-hewan lain. Ia lebih suka tinggal di tempat yang sunyi, jauh dari keramaian.

Meskipun pemalu, Kuri memiliki hati yang baik dan selalu peduli pada hewan-hewan kecil yang membutuhkan pertolongan. Ia sering kali melihat hewan-hewan itu kesulitan mencari makanan atau bersembunyi dari predator. Kuri dengan hati yang lembut selalu datang membantu mereka, tetapi karena sifatnya yang pemalu, ia tidak pernah mendapatkan banyak teman." ],
       
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
              <small class="text-muted p-6"><?= htmlspecialchars($it["konten"]) ?></small>
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
                    <div class="modal-body p-2 position-relative">
                        <img
                        src="<?= htmlspecialchars($it["src"]) ?>"
                        alt="<?= htmlspecialchars($it["judul"]) ?>"
                        class="img-fluid w-100"
                        >
                        <p class= "p-4"><?= htmlspecialchars($it["konten"]) ?></p>
                        
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

  </div>
</div>

<?php include 'partials/footer.php'; ?>
