<?php include 'partials/header.php';?>



<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Pengaturan Galeri</h3>
    </div>
    <form action="logika/tambah_galeri.php" method="POST" enctype="multipart/form-data">
        <div class="panel-body">
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label for="Nama"> <i class="fa-solid fa-file-signature"></i> Nama</label>
                    <input type="text" name="nama-file" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="file"> <i class="fa-solid fa-arrow-pointer"></i> Pilih file</label>
                    <input type="file" id="galery-file" name="file" class="form-control">
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button class="btn btn-primary btn-sm"> <i class="fa-solid fa-floppy-disk"></i> Simpan</button>
        </div>
    </form>
</div>

<?php 
    require_once "../config.php";

    $data = [];
    $q = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id DESC");
    if ($q) {
      while ($row = mysqli_fetch_assoc($q)) {
        $data[] = $row;
      }
    }
?>

<div class="panel">
    <div class="panel-heading">
        <h4 class="Panel-title"><b><i class="fa fa-picture-o"></i> Galery</b></h4>
        <p class="panel-subtitle"><i>Manajemen Galeri Qu</i></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <?php  foreach($data as $d) { ?>
            <div class="col-md-4">
                <div class="panel" style="border:5px solid #eee; border-radius:10px; box-shadow:2 6px 18px rgba(0,0,0,.08); overflow:hidden;">
                    <div class="panel-body">
                        <img src="assets/galeri/<?= $d['gambar']?>"  class="img-responsive" style="width:100%; height:300px; object-fit: cover;display: block;" alt="">
                    </div>
                    <div class="panel-footer">
                        <center>
                            <a href="logika/hapus_galeri.php?id=<?= $d['id']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                        </center>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'partials/footer.php';?>