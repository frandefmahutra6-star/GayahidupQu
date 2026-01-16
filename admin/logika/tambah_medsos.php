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
    
     $tt = trim($_POST['tt']);

    if($tt !== '') {
        $check = "SELECT * FROM kontak WHERE jenis_alamat = 'tt'";
        $hasil_check = mysqli_query($conn, $check);

        if ($hasil_check && mysqli_num_rows($hasil_check) > 0) {
            $tt_safe = mysqli_real_escape_string($conn, $tt);
            $query = "UPDATE kontak SET alamat = '$tt_safe' WHERE jenis_alamat = 'TT'";
            mysqli_query($conn, $query);
        } else {
            $query = "INSERT INTO kontak (jenis_alamat, alamat) VALUES ('TT', '$tt')";
            $result = mysqli_query($conn, $query);
        }
    }

    $ig = trim($_POST['ig']);

    if($tt !== '') {
        $check = "SELECT * FROM kontak WHERE jenis_alamat = 'ig'";
        $hasil_check = mysqli_query($conn, $check);

        if ($hasil_check && mysqli_num_rows($hasil_check) > 0) {
            $ig_safe = mysqli_real_escape_string($conn, $ig);
            $query = "UPDATE kontak SET alamat = '$ig_safe' WHERE jenis_alamat = 'IG'";
            mysqli_query($conn, $query);
        } else {
            $query = "INSERT INTO kontak (jenis_alamat, alamat) VALUES ('IG', '$ig')";
            $result = mysqli_query($conn, $query);
        }
    }

    $tw = trim($_POST['tw']);

    if($tt !== '') {
        $check = "SELECT * FROM kontak WHERE jenis_alamat = 'tw'";
        $hasil_check = mysqli_query($conn, $check);

        if ($hasil_check && mysqli_num_rows($hasil_check) > 0) {
            $tw_safe = mysqli_real_escape_string($conn, $tw);
            $query = "UPDATE kontak SET alamat = '$tw_safe' WHERE jenis_alamat = 'TW'";
            mysqli_query($conn, $query);
        } else {
            $query = "INSERT INTO kontak (jenis_alamat, alamat) VALUES ('TW', '$ig')";
            $result = mysqli_query($conn, $query);
        }
    }



    


    header("Location: ../kontak.php");
    exit;

?>
