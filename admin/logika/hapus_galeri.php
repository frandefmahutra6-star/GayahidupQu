<?php
    require_once "../../config.php";

    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM galeri WHERE id = $id");

    header("Location: ../galeri.php?del=1");
    exit;
?>
