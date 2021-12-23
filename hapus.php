<?php
    include("config.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = "SELECT foto FROM siswa WHERE id=$id";
        $query = mysqli_query($db, $sql);
        $data = mysqli_fetch_array($query);

        if (is_file("images/" . $data['foto'])) {
            unlink("images/" . $data['foto']);
        }

        $sql = "DELETE FROM siswa WHERE id=$id";
        $query = mysqli_query($db, $sql);
        
        if ($query) {
            header('Location: list.php');
        }

        else {
            die("Gagal menghapus.");
        }
    }

    else {
        die("Akses dilarang!");
    }
?>