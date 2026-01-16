<?php include 'partials/header.php';?>

<?php 
    require_once "../config.php";

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
    $alamat=$data['alamat'] ?? '';
    $whatsapp=$data['whastapp'] ?? '';
    $email=$data['email'] ?? '';

?>

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title"><b>Pengaturan Media Social Fran</b></h3>
    </div>
    <form action="logika/tambah_medsos.php" method="POST">
        <div class="panel-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><i class="fab fa-facebook"></i> Facebook:</label>
                            <input type="text" class="form-control" name="fb" value="<?= htmlspecialchars($fb) ?>">
                        </div>
                        <div class="form-group">
                            <label for=""><i class="fab fa-instagram"></i> Instagram:</label>
                            <input type="text" class="form-control" name="ig" value="<?= htmlspecialchars($ig) ?>">
                        </div>
                        <div class="form-group">
                            <label for=""><i class="fab fa-whatsapp"></i> whatsapp:</label>
                            <input type="text" class="form-control" name="whastapp" value="<?= htmlspecialchars($whatsapp) ?>">
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><i class="fab fa-twitter"></i> Twitter:</label>
                            <input type="text" class="form-control" name="tw" value="<?= htmlspecialchars($tw) ?>">
                        </div>
                        <div class="form-group">
                            <label for=""><i class="fab fa-tiktok"></i> Tiktok:</label>
                            <input type="text" class="form-control" name="tt" value="<?= htmlspecialchars($tt) ?>">
                        </div>
                        <div class="form-group">
                            <label for=""> <i class="fa-solid fa-envelope"></i> email:</label>
                            <input type="text" class="form-control" name="email" value="<?= htmlspecialchars($email) ?>">
                        </div>
                        
                        
                        


                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                            <label for=""> <i class="fa-solid fa-house"></i> Alamat:</label>
                            <textarea type="text" class="form-control" name="alamat" value="<?= htmlspecialchars($alamat) ?>"> </textarea>
                        </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
        </div>
    </form>
</div>


<?php include 'partials/footer.php';?>