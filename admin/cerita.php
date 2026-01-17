<?php include 'partials/header.php';?>

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Pengaturan Ceritaku</h3>
    </div>
    <form action="logika/tambah_blog.php" method="post" enctype="multipart/form-data">

        <div class="panel-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Judul:</label>
                            <input type="text" class="form-control" name="judul">
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="">Gambar:</label>
                            <input type="file" class="form-control" name="gambar">
                        </div>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="">Isi:</label>
                            <textarea name="isi" class="form-control" id="" rows=10></textarea >
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="panel-footer">
        <button class="btn btn-primary btn-sm"> <i class="fa-solid fa-floppy-disk"></i> Simpan</button>
    </div>
    </div>
    </form>
</div>
<?php 
    require_once "../config.php";

    $data = [];
    $q = mysqli_query($conn, "SELECT * FROM blog ORDER BY id DESC");
    if ($q) {
      while ($row = mysqli_fetch_assoc($q)) {
        $data[] = $row;
      }
    }
?>

<div class="panel">
    <div class="panel-heading">
        <h4 class="panel-title"><b><i class="fa-solid fa-square-rss"></i>Blog</b></h4>
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
                            <a href="logika/hapus_blog.php?id=<?= $d['id']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                        </center>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="panel-footer">

    </div>

</div>







<?php include 'partials/footer.php';?>