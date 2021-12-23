<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB | List Pendaftar</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/list.css" rel="stylesheet">
</head>

<body>
    <section class="list p-5">
        <h2>Data Pendaftar</h2>
        <nav>
            <a class="btn m-2" href="registrasi.php">[+] Tambah Baru</a>
        </nav>
        <table class="table mt-3">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Sekolah Asal</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php

                include('config.php');

                $sql = "SELECT * FROM siswa";
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $siswa['id'] . "</td>";
                    echo "<td>" . $siswa['nama'] . "</td>";
                    echo "<td>" . $siswa['alamat'] . "</td>";
                    echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                    echo "<td>" . $siswa['agama'] . "</td>";
                    echo "<td>" . $siswa['sekolah_asal'] . "</td>";
                    echo "<td>".($siswa['foto'] == null ? "UNDEFINED" : "<img src='images/" . $siswa['foto'] . "' width='160' height='160'>")."</td>";
                       
                    echo "<td>";
                    echo "<a class=\"btn\" href='edit.php?id=" . $siswa['id'] . "'>Edit</a>";
                    echo "<a class=\"btn\" href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        
    <p>Total Pendaftar : <?php echo mysqli_num_rows($query) ?></p>
    </section>
</body>

</html>