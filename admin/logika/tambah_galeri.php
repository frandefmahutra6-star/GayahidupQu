<?php
    require_once "../../config.php";

    $nama = trim($_POST['nama-file']);
    $ext  = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
    $namaFile = time() . '.' . $ext;


    $uploadDir = __DIR__ . "/../assets/galeri/";

    
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

    $target = $uploadDir . $namaFile;

    move_uploaded_file($_FILES['file']['tmp_name'], $target);

    $nama_safe = mysqli_real_escape_string($conn, $nama);
    $namaFile_safe = mysqli_real_escape_string($conn, $namaFile);

    $query = "INSERT INTO galeri (judul, gambar) VALUES ('$nama_safe', '$namaFile_safe')";
    mysqli_query($conn, $query);

    header("Location: ../galeri.php");
    exit;
?>
