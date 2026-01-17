<?php
    require_once "../../config.php";

    $judul = trim($_POST['judul']);
    $isi = trim($_POST['isi']);
    $ext  = strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));

    // var_dump($ext);
    // die();

    $namaFile = time() . '.' . $ext;


    $uploadDir = __DIR__ . "/../assets/galeri/";

    
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

    $target = $uploadDir . $namaFile;

    move_uploaded_file($_FILES['gambar']['tmp_name'], $target);

    $query = "INSERT INTO blog (gambar, judul, isi) VALUES ('$namaFile', '$judul' ,'$isi')";
    mysqli_query($conn, $query);

    header("Location: ../cerita.php");
    exit;
?>
