<?php include 'partials/header.php';?>

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Pengaturan Galeri</h3>
    </div>
    <form action="" method="post">
          <div class="panel-body">
        <div class="col-md-12">
            
              
                     <div class="form-group col-md-6">
                    <label for="Nama"> <i class="fa-solid fa-file-signature"></i> Nama</label>
                   <input type="text" name="nama-file">
</div>
                <div class="form-group col-md-6">
                    <label for="file"> <i class="fa-solid fa-arrow-pointer"></i> Pilih file</label>
                     <input type="file" id="galery-file" name="file">
                </div>
             
               
                
            
        </div>
    </div>
    <div class="panel-footer">
        <button class="btn btn-primary btn-sm"> <i class="fa-solid fa-floppy-disk"></i> Simpan</button>
    </div>
    </form>
</div>








<?php include 'partials/footer.php';?>