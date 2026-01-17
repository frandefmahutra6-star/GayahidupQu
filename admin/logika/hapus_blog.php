<?php
    require_once "../../config.php";

    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM blog WHERE id = $id");

    header("Location: ../cerita.php?del=1");
    exit;
?>
