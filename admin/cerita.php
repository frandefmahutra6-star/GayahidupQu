<?php include 'partials/header.php';?>

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Pengaturan Ceritaku</h3>
    </div>
    <form action="" method="post">

        <div class="panel-body">
            <div class="form-group">
                <label for="judul"> <i class="fa-solid fa-bandage"></i> Judul</label>
                <input type="text" name="judul">
            </div>
            <div class="form-group">
                <label for="konten"> <i class="fa-solid fa-file-pen"></i> Konten</label>
                <textarea name="konten" id="konten"></textarea>
            </div>
        </div>

    <div class="panel-footer">
        <button class="btn btn-primary btn-sm"> <i class="fa-solid fa-floppy-disk"></i> Simpan</button>
    </div>
    </div>
    </form>
</div>







<?php include 'partials/footer.php';?>