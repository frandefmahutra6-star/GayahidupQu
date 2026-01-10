<?php
    require_once "../../config.php";

    $fb = trim($_POST['fb']);

    if($fb !== '') {
        $check = "SELECT * FROM kontak WHERE jenis_alamat = 'FB'";
        $hasil_check = mysqli_query($conn, $check);

        if ($hasil_check && mysqli_num_rows($hasil_check) > 0) {
            $fb_safe = mysqli_real_escape_string($conn, $fb);
            $query = "UPDATE kontak SET alamat = '$fb_safe' WHERE jenis_alamat = 'FB'";
            mysqli_query($conn, $query);
        } else {
            $query = "INSERT INTO kontak (jenis_alamat, alamat) VALUES ('FB', '$fb')";
            $result = mysqli_query($conn, $query);
        }
    }
    


    header("Location: ../kontak.php");
    exit;

?>
