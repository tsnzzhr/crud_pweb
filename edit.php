<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB | Edit</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/regis.css" rel="stylesheet">
</head>

<body>
    <section class="get-in-touch p-5">
        <h1 class="title">Edit Pendaftar</h1>
        <form action="proses_edit.php" method="POST"  enctype="multipart/form-data" class="contact-form row" autocomplete="false">
            
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <div class="form-field col-lg-6">
                <input id="nama" name="nama" class="input-text js-input text-white" value="<?php echo $siswa['nama'] ?>" type="text" autocomplete="false" required>
                <label class="label" for="nama">Nama Lengkap</label>
            </div>
            <div class="form-field col-lg-6 ">
                <input id="alamat" name="alamat" class="input-text js-input text-white"  value="<?php echo $siswa['alamat'] ?>" type="text" autocomplete="false" required>
                <label class="label" for="alamat">Alamat</label>
            </div>
            <div class="form-field col-lg-6 ">
                <input id="sekolah" name="sekolah_asal" class="text-white input-text js-input" value="<?php echo $siswa['sekolah_asal'] ?>" type="text" autocomplete="false" required>
                <label class="label" for="sekolah">Sekolah Asal</label>
            </div>
            <div class="form-field col-lg-6 ">
                <?php $agama = $siswa['agama']; ?>
                <select name="agama" style="padding:6px; width:320px; font-size:18px; border-radius:15px;">

                    <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                    <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                    <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                </select>
                <label class="label mb-4" for="agama">Agama</label>
            </div>
            <div class="form-field col-lg-12">

                <label class="gender-label" for="jenis_kelamin">Jenis Kelamin : </label>
                <?php $jk = $siswa['jenis_kelamin']; ?><br>
                <input type="radio" class="btn-check js-input" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>  autocomplete="false" required>
                <label class="btn" for="male">Laki-Laki</label>
                <input type="radio" class="btn-check js-input" name="jenis_kelamin" value="perempuan"  <?php echo ($jk == 'perempuan') ? "checked": "" ?> autocomplete="false" required>
                <label class="btn" for="female">Perempuan</label>
            </div>
            <div class="form-field col-lg-12">
                <label for="foto">Foto</label><br><br>
                <input type="file" name="foto" value=""><br><br>
            </div>
            <div class="form-field col-lg-12">
                <input class="submit-btn" type="submit" value="simpan" name="simpan" />
            </div>
        </form>
    </section>
    </section>
</body>

</html>